<?php

namespace thipages\jsbuild;
use thipages\jsbuild\Base64Config;
class JSBuild {
    const MODEL=[
        'author'=>0,
        'user'=>0,
        'name'=>0,
        'description'=>0,
        'keywords'=>1
    ];
    private $config;
    private $root;
    public function __construct($root=null,$fileName="jsbuild.json") {
        $root=self::thisDir($root);
        $this->config = json_decode(file_get_contents($root."/".$fileName));
        $this->root = $root;
    }
    public function replaceSlot ($slot, $content) {
        return str_replace('#'.$slot.'#',$this->config->{$slot},$content);
    }
    public function replaceSlot_list ($slot, $content) {
        $l=[];
        foreach ($this->config->{$slot} as $element) $l[]='"'.$element.'"';
        return str_replace('"#'.$slot.'#"',join(',',$l),$content);
    }
    public static function thisDir($root) {
        return $root===null ? getcwd() : $root;
    }
    public static function writeBuildModel($root=null) {
        $obj=new \stdClass();
        foreach (self::MODEL as $field=>$type) {
            if ($type===0) {
                $value='a'.ucfirst($field);
            } else {
                $value=[];
                for ($i=0;$i<3;$i++) $value[]=$field.($i+1);
            }
            $obj->{$field}=$value;
        }
        file_put_contents(self::thisDir($root).'/jsbuild.json',json_encode($obj,JSON_PRETTY_PRINT));
    }
    public function replaceGenerics($target,$content) {
        foreach (array_keys(get_object_vars($this->config)) as $slot) {
            $content=is_array($this->config->{$slot})
                ? $this->replaceSlot_list($slot,$content) 
                : $this->replaceSlot($slot,$content);
        }
        file_put_contents($target, $content);
    }
    public function writeBuild($echoing=true) {
        $thisDir=$this->root;
        $targetRollupDir=$thisDir."/rollup/";
        $sourceRollupDir=dirname(__FILE__)."/rollup/";
        $valid= (!file_exists( $targetRollupDir ) && !is_dir( $targetRollupDir ));
        //
        if ($valid) {
            mkdir($targetRollupDir);
            foreach(Base64Config::getContent() as $item) {
                $this->replaceGenerics(
                    join(DIRECTORY_SEPARATOR ,[$item[0],$item[1]]),
                    base64_decode($item[2])
                );
            }
            /*$files=scandir($sourceRollupDir);
            foreach ($files as $file) {
                if ($file==='.' || $file ==='..') continue;
                $this->replaceGenerics(
                    $targetRollupDir.$file,
                    file_get_contents($sourceRollupDir.$file)
                );
            }
            $this->replaceGenerics(
                $thisDir."/package.json",
                file_get_contents(dirname(__FILE__)."/package.json")
            );*/
        }
        if ($echoing) echo(
            $valid  ? "Creation succeed"
                    : "Creation failed (rollup folder already exists"
        );
        return $valid;
    }
}
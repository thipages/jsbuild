<?php

namespace thipages\jsbuild;
use stdClass;

class JSBuild {
    const MODEL=[
        'author'=>0,
        'user'=>0,
        'name'=>0,
        'description'=>0,
        'keywords'=>1
    ];
    private $fileName;
    private $root;
    public function __construct($root=null,$fileName="jsbuild.json") {
        $this->root=self::thisDir($root);
        $this->fileName=$fileName;
    }
    public function replaceSlot ($slot, $content,$config) {
        return str_replace('#'.$slot.'#',$config->{$slot},$content);
    }
    public function replaceSlot_list ($slot, $content, $config) {
        $l=[];
        foreach ($config->{$slot} as $element) $l[]='"'.$element.'"';
        return str_replace('"#'.$slot.'#"',join(',',$l),$content);
    }
    public static function thisDir($root) {
        return $root===null ? getcwd() : $root;
    }
    public static function writeBuildModel($root=null) {
        $obj=new stdClass();
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
    public function replaceGenerics($target,$content, $config) {
        foreach (array_keys(get_object_vars($config)) as $slot) {
            $content=is_array($config->{$slot})
                ? $this->replaceSlot_list($slot,$content,$config) 
                : $this->replaceSlot($slot,$content,$config);
        }
        file_put_contents($target, $content);
    }
    public function writeBuild($echoing=true) {
        $config = json_decode(file_get_contents($this->root."/".$this->fileName));
        $thisDir=$this->root;
        $targetRollupDir=$thisDir."/rollup/";
        $valid= (!file_exists( $targetRollupDir ) && !is_dir( $targetRollupDir ));
        //
        if ($valid) {
            mkdir($targetRollupDir);
            foreach(Base64Config::getContent() as $item) {
                $this->replaceGenerics(
                    join(DIRECTORY_SEPARATOR ,[$item[0],$item[1]]),
                    base64_decode($item[2]),$config
                );
            }
        }
        if ($echoing) echo(
            $valid  ? "Creation succeed"
                    : "Creation failed (rollup folder already exists"
        );
        return $valid;
    }
}
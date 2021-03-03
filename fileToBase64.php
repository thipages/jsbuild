<?php
$target='./src/thipages/jsbuild/Base64Config.php';
$rollup='./config/rollup';
$template=<<<Template
<?php
namespace thipages\jsbuild;
class Base64Config {
    public static function getContent() {
        return [
            #LIST#
        ];
    }
}
Template;


$data=[];
foreach (array_diff(scandir($rollup), [".", ".."]) as $name)  $data[]=[$rollup,$name];
$data[]=['./config/','package.json'];
//
$list=[];
foreach ($data as $item) {
    $list[]=getStringArray([$item[0],$item[1],base64_encode(file_get_contents(join('/',$item)))],true);
}

$content=str_replace('#LIST#',join(",\n",$list), $template);
file_put_contents($target,$content);
echo($target.' created');
//
function quote($s) {
    return "'".$s."'";
}
function getStringArray($list, $quoted) {
    $c=[];
    foreach ($list as $item) $c[]=$quoted?quote($item):$item;
    return join("\n",["[",join(",\n",$c),"]"]);
}



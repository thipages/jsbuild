<?php
use thipages\jsbuild\JSBuild;
require('../src/thipages/jsbuild/JSBuild.php');
require ('../src/thipages/jsbuild/Base64Config.php');
$builder=new JSBuild(dirname(__FILE__));
$builder->writeBuild();
//$builder->writeBuildModel(dirname(__FILE__));
# jsbuild
Automate js build

## installation
composer require thipages/jsbuild

## Usage

Create a _jsbuild.json_ file model to fill in

```php
use thipages\jsbuild\JSBuild;
require('./vendor/auotload.php');
$builder=new JSBuild();
$builder->writeBuildModel();
```

Create rollup config files folder and _package.json_ from a _jsbuild.json_ file 

```php
use thipages\jsbuild\JSBuild;
require('./vendor/auotload.php');
$builder=new JSBuild();
$builder->writeBuild();
// then update package.json dependencies
// and finally run npm install
```

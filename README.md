# jsbuild
Automate js build

## installation
_composer require thipages/jsbuild_


## Usage

1. Create a _jsbuild.json_ file by hand or with this helper

```php
use thipages\jsbuild\JSBuild;
require('./vendor/autotload.php');
$builder=new JSBuild();
$builder->writeBuildModel();
```

2. Create rollup config files folder and _package.json_ from a _jsbuild.json_ file 

```php
use thipages\jsbuild\JSBuild;
require('./vendor/autotload.php');
$builder=new JSBuild();
$builder->writeBuild();
```

3. update _package.json_ dependencies if any

4. Create library entry point as _./esm/index.js_
   
5. execute _npm install_

6. execute _npm run build_
   
This will create three root files
- index.js (esm)
- index.min.js (esm minified)
- min.js (iife minified)

Note : php script (point 2) can not be reused (no update process yet)



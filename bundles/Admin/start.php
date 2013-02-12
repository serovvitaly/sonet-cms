<?php

define('ADMIN_BUNDLE_DIR', dirname(__FILE__) . '/');


Autoloader::map(array(
  'Admin\\Module' => ADMIN_BUNDLE_DIR . 'module.php',
));


$modules = ADMIN_BUNDLE_DIR . 'modules';

Autoloader::directories(array($modules));

$modules = scandir($modules);



if (count($modules) > 2) {
    foreach ($modules AS $module) {
        
        if (!in_array($module, array('.','..'))) {
            Admin::regist_module($module);
        }
        
    }
}
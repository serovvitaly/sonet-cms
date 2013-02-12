<?php

namespace Admin;

use Laravel;

class Admin
{
    protected static $_modules = array();
    
    public static function regist_module($module)
    {
        $module = ucfirst( strtolower($module) );
        
        $module_main_class = $module . '\\Main';
        
        $module_main_class = new $module_main_class;
        
        if ($module_main_class instanceof \Admin\Module) {
            $module_main_class->init();
            $module_main_class->run();
            static::$_modules[$module] = $module_main_class;
        }  else {
            throw new \Exception("Module {$module} is not extends Admin\\Module");
        }
        
    }
}

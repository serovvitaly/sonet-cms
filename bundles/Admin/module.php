<?php

namespace Admin;

abstract class Module
{
    protected $_to_topmenu = true;
    
    public $title = NULL;
    
    public function init(){}
    
    public $topmenu = array();
    
    public function __construct()
    {
        //
    }
    
    
    /**
    * Финальная функция запуска модуля
    * 
    */
    final public function run()
    {   
        $mod = $this;
         
        if ($this->_to_topmenu) {
            \Event::listen('admin.topmenu.waiting', function() use ($mod) {
                return array(
                    'id'    => $mod->id,
                    'title' => $mod->title,
                    'items' => $mod->topmenu
                );
            });
        }
    }
    
    
    /**
    * Добавляет элемент в верхнее меню
    * 
    * @param mixed $mix
    */
    final protected function topmenu(array $mix)
    {
        $this->topmenu = $mix;
    }
}
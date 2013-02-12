<?php

namespace Administrate;


class Main extends \Admin\Module
{
    public $id    = 'administrate';
    public $title = 'Панель администрирования';
    
    public function init()
    {        
        $this->topmenu(
            array()
        );
    }
}
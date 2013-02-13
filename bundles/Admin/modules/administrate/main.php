<?php

namespace Administrate;


class Main extends \Admin\Module
{
    public $id    = 'administrate';
    public $title = 'Панель администрирования';
    
    public function init()
    {        
        $this->topmenu(array(
            array(
                'title' => 'первая кнопка',
                'href'  => '/admin/administrate'
            ),
            array(
                'title' => 'вторая кнопка',
                'href'  => '/admin/administrate'
            ),
        ));
    }
}
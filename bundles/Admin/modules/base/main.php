<?php

namespace Base;


class Main extends \Admin\Module
{
    public $id    = 'base';
    public $title = 'База данных';
    
    public function init()
    {        
        $this->topmenu(array(
            array(
                'title' => 'Список товаров',
                'href'  => '/admin/base'
            ),
            array(
                'title' => 'Статистика',
                'href'  => '/admin/base'
            ),
        ));
    }
}
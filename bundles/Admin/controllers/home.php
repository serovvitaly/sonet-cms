<?php


class Admin_Home_Controller extends Admin_Base_Controller
{
    public $layout = '_layout';
    
    public function action_index()
    {
        
        return View::make('admin::_layout');
        
        return 'ADMIN-HOME';
    }
}
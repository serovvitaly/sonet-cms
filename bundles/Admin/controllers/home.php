<?php


class Admin_Home_Controller extends Admin_Base_Controller
{
    
    public function action_index()
    {
        
        $this->layout->content = 'groov';
    }
}
<?php

use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;

class Home_Controller extends Base_Controller {

	public function action_index()
	{
        
        $UserSecurityIdentity = new UserSecurityIdentity;
        
        
		return View::make('home.index');
	}

}
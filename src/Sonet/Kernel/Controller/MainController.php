<?php

namespace Sonet\Kernel\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function runAction()
    {   
        $count = $this->getRequest()->getBasePath();
        
        
        return new Response('Foo-Bar: ' . $count, 200);
    }
}
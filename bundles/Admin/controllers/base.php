<?php


class Admin_Base_Controller extends Controller
{
    //public $layout = 'admin::_layout';
    
    protected $out = array();
    
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
    
    
    public function before()
    {
        //$events_begin = Event::fire('admin.before.begin');
        
        parent::before();
        
        $this->layout = View::make('admin::_layout');
        
        array(
            array(
                'title' => 'Администрирование',
                'id'    => 'administrate',
                'items' => array(
                    array(
                        'title' => 'Управление пользователями',
                        'href'  => 'foo/bar'
                    ),
                )
            ),
            array(
                'title' => 'База данных',
                'id'    => 'database',
                'items' => array(
                    array(
                        'title' => 'Управление пользователями',
                        'href'  => 'foo/bar'
                    ),
                )
            ),
        );
        
        $this->layout->topmenu = Event::fire('admin.topmenu.waiting');
    }
    
    
    public function after($response)
    {
        //$events_begin = Event::fire('admin.after.begin');
        
        parent::after($response);
        
        //$events_end = Event::fire('admin.after.begin');
    }
    

}
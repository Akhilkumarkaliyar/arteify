<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Home Controller
 *
 * @package		CodeIgniter
 * @subpackage	Controllers
 * @category	Frontend
 * @author		Scheppend INC
 * @website		http://www.inrozgar.com
 * @company     Scheppend Inc
 * @since		Version 1.0
 */
 
class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		error_reporting(E_ALL);
	    $this->load->model('home_mod');
	}
//==============Home========================//
    /**
     * Index
     *
     * This function display home page data
     * 
     * @access	public
     * @return	html data
     */
	public function index() 
	{ 
		$data['video']	= 	$this->home_mod->get_video();
		$data['event']	= 	$this->home_mod->get_event();
		$data['allart']	= 	$this->home_mod->get_feature();
		$data['popart']	= 	$this->home_mod->get_pop_artist();
		//pr($data);die;
		$views='index';
		frontend_layout($views,$data);
	}
	public function contact() 
	{ 
	
		$views='contact';
		frontend_layout($views,$data);
	}
	public function aboutus() 
	{ 
		$views='aboutus';
		frontend_layout($views,$data);
	}
	public function events() 
	{ 
		$data['event']	= 	$this->home_mod->get_event();
		$views='events';
		//pr($data);die;
		frontend_layout($views,$data);
	}
	public function artist($id) 
	{ 
		$data['artistcat']	= 	$this->home_mod->get_artist($id);
		$data['popart']	= 	$this->home_mod->get_pop_artist();
		//print_r($data);die;
		$views='artist';
		frontend_layout($views,$data);
	}
	public function artistdetail() 
	{ 
		$views='artistdetail';
		frontend_layout($views,$data);
	}
	public function blog() 
	{ 
		$views='blog';
		frontend_layout($views,$data);
	}
	public function contactform() 
	{ 
		if(isPostBack())
		{ 
			$response = $this->home_mod->contactform();
			//pr($response);die;
			if($response['empty']==1)
			{
				echo 1; die;
			}
			else 
			{
				echo 2; die;		 
			}
		}
	}
	
}//End of the class
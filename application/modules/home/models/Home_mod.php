<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Manage Profile Model 
 *
 * @package		CodeIgniter
 * @subpackage	Models
 * @category	Service Model
 * @author		Scheppend Inc
 * @website		http://www.inrozgar.com
 * @company     Scheppend Inc
 * @since		Version 1.0
 */
 
class Home_mod extends CI_Model {
    
	var $category      	 = "h_category"; 
	var $post      		 = "h_post"; 
	var $event      	 = "h_upcomingevent"; 
	var $video      	 = "h_post_file"; 
	var $users      	 = "h_users"; 
	function __construct()
    {
        parent::__construct();
    }
	public function get_artist($id=null)
	{
		$this->db->select('p.*,pf.image');
		$this->db->from('h_post as p');
		$this->db->where('category',$id);
		$this->db->join('h_post_file as pf','p.id=pf.post_id',left);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	} 
	public function get_feature()
	{
		$this->db->select('p.*,pf.image');
		$this->db->from('h_post as p');
		$this->db->where('is_featured',1);
		$this->db->join('h_post_file as pf','p.id=pf.post_id',left);
		$query = $this->db->get();
		$result = $query->result();
		//pr($result);die;
		return $result;
	}
	public function get_pop_artist()
	{
		$this->db->select('*');
		$this->db->from($this->users);
		$this->db->where('is_popular',1);
		$this->db->where('usertype',2);
		$query = $this->db->get();
		$result = $query->result();
		//echo $this->db->last_query();
		//pr($result);die;
		return $result;
	}
	public function get_event($id=null)
	{
		$this->db->select('*');
		$this->db->from($this->event);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function get_video($id=null)
	{
		$this->db->select('p.*,pf.video');
		$this->db->from('h_post_file as pf');
		$this->db->where('filetype','video');
		$this->db->join('h_post as p','p.id=pf.post_id','left');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function contactform()
	{
		$result['empty'] = TRUE;
        $result['exitance_error'] = false;
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('pin', 'Pin', 'trim|required');
        if ($this->form_validation->run() == FALSE) { 
    		$result['error_msg'] = validation_errors();
			return $result;
		} 
		$postData['name'] 		=   $this->input->post('name',true);
		$postData['email'] 			=   $this->input->post('email',true);
		$postData['message'] 			=   $this->input->post('message',true);
		$postData['pin'] 		=   $this->input->post('pin',true);
		$postData['mobile'] 		=   $this->input->post('mobile',true);
		$postData['created_date']            =   date('Y-m-d H:i:s');
		//pr($postData);die;
		$qry=$this->db->insert('h_contactus',$postData);
		if($qry ==1)
		{
			$insert_id = $this->db->insert_id();
			$result['empty'] = TRUE;
			$result['insert_id'] = $insert_id;
			return $result;
		}		
	}	
} //=========End Class==============//
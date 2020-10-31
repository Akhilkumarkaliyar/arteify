<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Form Validation Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Validation
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/libraries/form_validation.html
 */
class MY_Form_validation extends CI_Form_validation {

    public $CI;
    
    function __construct() {
        parent::__construct();
        $this->CI = &get_instance();
    }
    
 
     function checkCurrentpassword($currentpassword)
    {
        if($currentpassword)
        {
            $this->CI->db->select('*');
            $this->CI->db->where('id',  currentuserinfo()->id);
            $result =   $this->CI->db->get("aldoor_users")->row();
            $result =   (array)$result;
            if($result['password']  ==  md5($currentpassword))
            {
                return true;
            }else{
                $this->CI->form_validation->set_message('checkCurrentpassword', "Current password doesn't match" );
                return false;
            }
        }
    }
	
	
	public function is_unique_edit($str, $field) {
       
		if( is_numeric(@end($this->CI->uri->segment_array()))){
			$id_val= @end($this->CI->uri->segment_array());			
			$id = ID_decode($id_val);
			
		}else{
		    $reff_url=$_SERVER['HTTP_REFERER'];
            $exp_url=explode('/',$_SERVER['HTTP_REFERER']);			
		    if(is_numeric(@end($exp_url))){
			$id_val= @end($exp_url);
			$id = ID_decode($id_val);
		    } else {
			$exp_url=explode('?',$exp_url[6]);
			$exp_url=explode('=',$exp_url[1]);			
		
			if(is_numeric(@end($exp_url))){
			$id_val= @end($exp_url);
			$id = ID_decode($id_val);				
		    }
			}
		}
		
        sscanf($field, '%[^.].%[^.]', $table, $field);
        $res = $this->CI->db->limit(1)->get_where($table, array($field => $str, "id !=" => $id));
        if ($res->num_rows()>0) {
            $this->CI->form_validation->set_message('is_unique_edit', "%s already exists. ");
            return FALSE;
        }
        return TRUE;        
    }
	
	
	/**
     * alpha_space
     *
     * This function to alpha space validation
     * 
     * @access	public
     * @return	html data
     */
	public function alpha_space($str){				
	   if(!preg_match('/^[a-zA-Z\s]*$/', $str))
	   {
		  $this->CI->form_validation->set_message('alpha_space', '%s field may only contain alphabetical characters and space.');
		  return FALSE;
	   } 
	   return TRUE;	   
	}
	
	/**
     * positive_decimal
     *
     * This function to alpha space validation
     * 
     * @access	public
     * @return	html data
     */
	public function positive_decimal($str){				
	   if(!preg_match('/^[0-9.\s]*$/', $str))
	   {
		  $this->CI->form_validation->set_message('positive_decimal', '%s field may only contain positive decimal.');
		  return FALSE;
	   } 
	   return TRUE;	   
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
        function __construct() {
		parent::__construct();
		$this->load->model("login_model");
	}
        
	public function index(){
            $this->data['subview']='login/index';
            $this->load->view('main_view',$this->data);
	}
        
        protected function rules() {
		$rules = array(
				 array(
					'field' => 'username', 
					'rules' => 'trim|required|max_length[40]'
				), 
				array(
					'field' => 'password', 
					'rules' => 'trim|required|max_length[40]'
				)
			);
		return $rules;
	}
        
    public function signin() {
       $this->data['form_validation'] =[];
       $redirect_url='';
        if ($_POST) {
            $rules = $this->rules();
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata("errors", "User Name or Password is Worng");
                $redirect_url = "login/index";
            } else {
                $login = $this->loginValidation($_POST);
                if ($login === true) {
                    redirect(base_url('home'));
                } else {
                    $this->session->set_flashdata("errors", "User Name or Password is Worng");
                    $redirect_url = "login/index";
                }
            }
        } else {
            $redirect_url = "login/index";
            $this->session->sess_destroy();
        }
        redirect(base_url($redirect_url));
       // $this->load->view('main_view', $this->data);
    }
    public function loginValidation($loginDetails = []) {
        $return = false;
        if(is_array($loginDetails)){
           if(count($loginDetails)){
               $userName    = $loginDetails['username'];
               $password    = md5($loginDetails['password']);
               $userDetails = $this->login_model->getUserDetails($userName,$password);
               if(count($userDetails)){
                   $sessionData =array(
                                    'name'      => $userDetails['name'],
                                    'user_name' => $userDetails['user_name'],
                                    'role_id'   => $userDetails['role_id'], 
                                    'site_id'   => $userDetails['site_id'],
                                    'role_name' => $userDetails['role_name']
                           );
                   $this->session->set_userdata($sessionData);
                   $return = true;
               }else{
                   $return = false;
               }
           }else{
               $return =  false;
          }   
        }   
        return $return;
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login/'));
    }
}
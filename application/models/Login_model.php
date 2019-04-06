<?php
Class Login_model extends CI_Model{
    protected $ad_id;
    
    public function __construct(){
    }
    
  /*  public function insertUser($insertData = []){
        if(count($insertData)):
            $this->db->insert('user_login',$insertData);
            return $this->db->insert_id();
        else:
            return false;
        endif;
    }
    
    public function updateOiddTempJobStarted($oiddt_id=0,$ad_id=0){
        if($oiddt_id!=0):
            $this->db->set('job_started_status', 1);
            $this->db->where('ad_id', $ad_id);
            $this->db->where('oiddt_id', $oiddt_id);
            $this->db->update('oidd_temp');
            return true;
        endif;
    }
    */
    
    public function getUserDetails($username = '',$password= '') {
        if ($username != ''&& $password != ''):
            $this->db->select('*');
            $this->db->from('user_login');
            $this->db->join('roles','roles.role_id = user_login.role_id');
            $this->db->where('user_login.active_status',1);
            $this->db->where('user_name',$username);
            $this->db->where('password',$password);
            $query      = $this->db->get();
            if($query->num_rows() > 0 ){
                $row    = $query->result_array();
                return current($row);
            }else{
                return [];   
            }
        endif;
    }
}
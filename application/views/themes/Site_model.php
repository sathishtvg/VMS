<?php
Class Site_model extends CI_Model{
    protected $ad_id;
    
    public function __construct(){
    }
    
    public function insertSite($insertData = []){
        if(count($insertData)):
            $this->db->insert('site',$insertData);
            return $this->db->insert_id();
        else:
            return false;
        endif;
    }
   
}
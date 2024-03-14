<?php
 if (!defined('BASEPATH'))
 exit('No direct script access allowed');

class AppModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function getAPPInfo(){
        $query = $this->db->query("SELECT * FROM system_app where appID=1");
            return $query->row_array();           
    }

    public function get_list_app_assets(){
        $query = $this->db->query("SELECT * FROM app_assets");
            return $query->result_array();           
    }

    public function get_latest_update(){
        $query = $this->db->query("SELECT MAX(appUpdateID) as 'max_id' FROM app_system_update");
        foreach($query->result_array() as $row) {
                return $row['max_id'];
        }
    }

    public function get_update_info(){
        $maxID = $this->get_latest_update();
        $query = $this->db->query("SELECT * FROM app_system_update ORDER BY appUpdateID DESC LIMIT 0,1");
        return $query->result_array();     
    }

}
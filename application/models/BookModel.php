<?php
 if (!defined('BASEPATH'))
 exit('No direct script access allowed');

class BookModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    
    public function get_list_material_present(){
        $query = $this->db->query("SELECT * FROM material_present order by presentTitle");
            return $query->result_array();           
    }

    public function get_material_present($id){
        $query = $this->db->query("SELECT * FROM material_present where materialPresentID=".$id." order by presentTitle");
        return $query->result_array(); 
    }

    public function get_list_material_book(){
        $query = $this->db->query("SELECT * FROM material_book order by book_name");
            return $query->result_array();           
    }
    
     public function get_material_book($id){
        $query = $this->db->query("SELECT * FROM material_book where bookID=".$id." order by book_name");
        return $query->result_array(); 
    }

     public function get_list_material_book_lessons($bookID){
        $query = $this->db->query("SELECT * FROM material_book_lessons where bookID=".$bookID." order by lessonsID");

         return $query->result_array();           
    }

    private function content_wrapper($content){
         $content = str_replace('"',"\"",$content);
        return $content;
    }


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {

    public function index()
	{}

    public function android_material_present_get_list(){
        $data = $this->BookModel->get_list_material_present();
            echo json_encode($data);   
    }

    public function android_material_present_get(){
        if(isset($_POST['materialPresentID'])){
            $data = $this->BookModel->get_material_present($this->input->post('materialPresentID'));
            echo json_encode($data);  
        }else{
            echo "You are not allowed to visit here.";
        }
    }

  public function android_material_book_get_list(){
        $data = $this->BookModel->get_list_material_book();
            echo json_encode($data);   
    }
    
    public function android_material_book_get(){
        if(isset($_POST['bookID'])){
        $data = $this->BookModel->get_material_book($this->input->post('bookID'));
        echo json_encode($data);  
        }else{
            echo "You are not allowed to visit here.";
        }
}

    public function android_material_book_lessons_get_list(){
        if(isset($_POST['bookID'])){
            $data = $this->BookModel->get_list_material_book_lessons($this->input->post('bookID'));
            echo json_encode($data);
           }else{
            echo "You are not allowed to visit here.";
           }
    }

}
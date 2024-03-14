<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends CI_Controller {

	public function index()
	{
    }

    public function android_app_assets_get_list(){
            $data = $this->AppModel->get_list_app_assets();
                echo json_encode($data);   
    }

    public function privacy(){
		$this->load->view('templates/header');
		$this->load->view('templates/privacy');
		$this->load->view('templates/full-footer');
    }


    public function download(){
      $this->load->view('templates/header');
      $this->load->view('pages/download');
      $this->load->view('templates/full-footer');
    }

    public function android_update_checker(){
      echo $this->AppModel->get_latest_update();
    }

    public function android_get_update(){
      echo json_encode($this->AppModel->get_update_info());
    }

}
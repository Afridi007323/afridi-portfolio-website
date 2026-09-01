<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){ 
        $this->load->view('home'); 
    }

    public function skills(){ 
        $this->load->view('skills'); 
    }

    public function projects(){ 
        $this->load->view('projects'); 
    }

    public function contact(){ 
        $this->load->view('contact'); 
    }

    public function resume(){
        $data['title'] = "Resume - Afridi Ansari";
        $this->load->view('layout/header', $data);
        $this->load->view('resume');
        $this->load->view('layout/footer');
    }
}
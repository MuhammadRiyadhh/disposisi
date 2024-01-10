<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_controller {
    public function index()
    {
        $data = array(
            'content'=>  'dashboard/index.php'
        );
        $this->load->view('template/main',$data);
    }
}
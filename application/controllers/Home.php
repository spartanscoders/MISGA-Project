<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //For security reasons

/*
 * File path: application/controllers/Home.php
 * URL: http://localhost/misga/index.php/home
 * This controller will load the main.php view under 'layouts' folder
 * The main view and page title are dynamically loaded via $data[] array
 */

class Home extends CI_Controller {
    
    public function index() {
        $data = [
            'page_title' => 'Home View',
            'main_view' => 'home_view' //name of the view relative to views folder
        ];
        $this->load->view('layouts/main', $data);
    }

}

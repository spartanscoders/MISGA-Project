<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 


class Contact extends CI_Controller {

    public function index() {

    
        $data = [
            'page_title' => 'Contact Us',
            'contact_view' => 'contact_view'
        ];
        $this->load->view('contact_view', $data);
    }

}


<?php

class Register extends CI_Controller {
    public function index() {
        $data = [
            'page_title' => 'User Registration',
            'main_view' => 'register_view'
        ];
        $this->load->view('layouts/main_no_sidebar', $data);
    }
}

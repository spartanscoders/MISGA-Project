<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author lucky
 */
class Register extends CI_Controller {
    public function index() {
        $data = [
            'page_title' => 'User Registration',
            'main_view' => 'register_view'
        ];
        $this->load->view('layouts/main', $data);
    }
}

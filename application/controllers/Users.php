<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * File path: application/controllers/Users.php
 * URL: http://localhost/index.php/users/login
 * This controller requires 'session' and 'form_validation' libraries
 * The above libraries are loaded through autoload.php
 */

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'trim|required|min_length[4]|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $data = [
                //'errors' => validation_errors('<div class="alert alert-danger">', '</div>')
                'errors' => validation_errors()
            ];
            $this->session->set_flashdata($data);
            redirect('home');
        } else {
            //The form validation was successfull
            //This is where the user will be logged in
            //Proceed with user login process
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //var_dump($username);
            //var_dump($password);
            $user_id = $this->user_model->login_user($username, $password);
            if ($user_id) {
                //This is where the user is actually logs in
                echo "User login was success";
            } else {
                //The user was not found or the password did not match with the DB records
                echo "User login failed";
            }
        }
    }

    public function register() {
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|min_length[3]');
        $this->form_validation->set_rules('email', 'Email address', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirmation password', 'trim|required|min_length[4]|matches[password]');
        
        if ($this->form_validation->run() === FALSE) {
            //We have validation errors
            $data = [
                'page_title' => 'User Registration',
                'main_view' => 'register_view'
            ];
            $this->load->view('layouts/main', $data);
        } else {
            //If validation was successfull, register the user
            if ($this->user_model->create_user()) {
                //User has been created
                $this->session->set_flashdata('user_registered', 'User has been registered!');
                redirect('home');
            } else {
                $this->session->set_flashdata('registration_failed', 'There was an error creating the user');
                redirect('register');
            }
        }
    }
}

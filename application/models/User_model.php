<?php

class User_model extends CI_Model {
    
    /*
     * SQL script to create users table in the schema
     CREATE TABLE `users` (
    `uid` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(45) NOT NULL,
    `password` varchar(255) NOT NULL,
    `first_name` varchar(45) DEFAULT NULL,
    `last_name` varchar(45) DEFAULT NULL,
    `email` varchar(100) DEFAULT NULL,
    PRIMARY KEY (`uid`),
    UNIQUE KEY `uid_UNIQUE` (`uid`),
    UNIQUE KEY `username_UNIQUE` (`username`)
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

     */
    
    public function login_user($usr, $pwd) {
        $this->db->where('username', $usr);
        //$this->db->where('password', $pwd); //Not valid as it verifies plain-text password
        $result = $this->db->get('users');
        
        if (!$result->row()){
            //The user and/or password did not match
            return FALSE;
        }
        
        $hashedPassword = $result->row()->password;
        if (password_verify($pwd, $hashedPassword)) {
            //Login was successfull
            return $result->row(0)->uid;
        } else {
            //Login failed (password mismatch)
            return FALSE;
        }
    }
    
    public function create_user() {
        $hashed_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $hashed_password
        ];
        
        $insert_data = $this->db->insert('users', $data);
        return $insert_data;
    }
}

<?php

class User_model extends CI_Model {
    
    public function login_user($usr, $pwd) {
        $this->db->where('username', $usr);
        
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

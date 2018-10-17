<?php

class mcq_model extends CI_Model {

    public function getQuestions()
    {
        $this->db->select("quizID, question, choice1, choice2, choice3, answer");
        $this->db->from("tbl_quiz_mcq");
        
        $query = $this->db->get();
        
        return $query->result();
        
        $num_data_returned = $query->num_rows;
        
        if ($num_data_returned < 1) {
          echo "There are no questions for this lessons";
          exit();   
        }
  }
}
<?php

class lessons_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_lessons($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('tbl_lessons');
            return $query->result_array();
        }

        $query = $this->db->get_where('tbl_lessons', array('lessonID' => $slug));
        return $query->row_array();
    }

    public function get_lessons_by_id($id = 0)
    {
        if ($id === 0) {
            $query = $this->db->get('tbl_lessons');
            return $query->result_array();
        }

        $query = $this->db->get_where('tbl_lessons', array('lessonID' => $id));
        return $query->row_array();
    }

    public function set_lessons($id = 0 ,$filedata)
    {

        $this->load->helper('url');
        $slug = url_title($this->input->post('lesson_desc'), 'dash', TRUE);
        $data = array(
            'lesson_desc' => $this->input->post('lesson_desc'),
            'objectives' => $this->input->post('objectives'),
            'vid_url' => $filedata['upload_data']['file_name'],
        );
        if ($id == '') {

            return $this->db->insert('tbl_lessons', $data);
        } else {
            $this->db->where('lessonID', $id);
            return $this->db->update('tbl_lessons', $data);
        }
    }

    public function delete_lessons($id)
    {
        $this->db->where('lessonID', $id);
        return $this->db->delete('tbl_lessons');
    }
}
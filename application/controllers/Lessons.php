<?php

class Lessons extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('lessons_model');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['lessons'] = $this->lessons_model->get_lessons();
        $data['title'] = 'Lessons archive';

        $this->load->view('layouts/header', $data);
        $this->load->view('lessons/index', $data);
        $this->load->view('layouts/footer');
    }

    public function view($slug = NULL)
    {
        $data['lessons_item'] = $this->lessons_model->get_lessons($slug);

        if (empty($data['lessons_item'])) {
            show_404();
        }

        $data['title'] = $data['lessons_item']['lesson_desc'];

        $this->load->view('layouts/header', $data);
        $this->load->view('lessons/view', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a lesson ';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header', $data);
            $this->load->view('lessons/create');
            $this->load->view('layouts/footer');

        } else {
            $this->lessons_model->set_lessons();
            $this->load->view('layouts/header', $data);
            $this->load->view('lessons/success');
            $this->load->view('layouts/footer');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        if (empty($id)) {
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a lessons item';
        $data['lessons_item'] = $this->lessons_model->get_lessons_by_id($id);

        $this->form_validation->set_rules('lesson_desc', 'Title', 'required');
        $this->form_validation->set_rules('objectives', 'Objectives', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header', $data);
            $this->load->view('lessons/edit', $data);
            $this->load->view('layouts/footer');

        } else {

            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "mp3|mp4",
                'overwrite' => TRUE,
               //'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);


                if ($this->upload->do_upload('videofile')) {
                    $data = array('upload_data' => $this->upload->data());

                } else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }


            $this->lessons_model->set_lessons($id, $data);
            redirect(base_url() . 'index.php/lessons');


        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id)) {
            show_404();
        }

        $lessons_item = $this->lessons_model->get_lessons_by_id($id);

        $this->lessons_model->delete_lessons($id);
        redirect(base_url() . 'index.php/lessons');
    }


}


<?php

class Course_selection extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_selection_model');

	}

	function index()
	{
		$data['subjects'] = $this->course_selection_model->fetch_subjects();
		$this->load->view('course_selection_view', $data);
	}

    function view()
    {
        $data = $this->course_selection_model->fetch_selected_lesson('LES0001');
        $this->load->view('lesson_view', $data);
    }

	function fetch_modules()
	{
		if($this->input->post('subID'))
		{
			echo $this->course_selection_model->fetch_modules($this->input->post('subID'));
		}
	}

	
	function fetch_lessons()
	{
		if($this->input->post('moduleID'))
		{
			echo $this->course_selection_model->fetch_lessons($this->input->post('moduleID'));
		}
	}

	}

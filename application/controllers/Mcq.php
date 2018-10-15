<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //For security reasons

class Mcq extends CI_Controller {

	public function mcqDisplay() {

		function __construct() {
			parent::__construct();
			$this->load->database();
		}
        //$this->load->view('mcq_view');
		$this->load->model('mcq_model');
		$this->data['questions'] = $this->mcq_model->getQuestions();
		$this->load->view('mcq_view', $this->data);
	}

	public function mcqResult()
	{
		$this->data['checks'] = array(
			'ques1' => $this->input->post('quizid1'),
			'ques2' => $this->input->post('quizid2'),
			'ques3' => $this->input->post('quizid3'),
			'ques4' => $this->input->post('quizid4'),
			'ques5' => $this->input->post('quizid5'),
			
		);

		$this->load->model('mcq_model');
		$this->data['results'] = $this->mcq_model->getQuestions();
		$this->load->view('mcq_results_view', $this->data);

		//var_dump($this->data['results']);
	}
}
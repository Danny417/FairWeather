<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/main
	 *	- or -  
	 * 		http://example.com/index.php/main/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/main/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('mainView');
	}
	
	/*
	* Test function to get all rows from model
	*/
	public function GetAll() {
		$this->load->model('visitors_model');
		$data['query'] = $this->visitors_model->visitors_getall();
		$this->load->view('visitors_viewall', $data);
	}
	
	public function submit() {
		$this->load->model('visitors_model');
		$id = $this->visitors_model->insert_entry();
		$this->load->model('comments_model');
		$this->comments_model->insert_entry($id);
		echo "<div class='header'>Thank you!</div><div class='content'>".
			"<div class='left'><i class='chat outline icon'></i></div>".
			"<div class='right'><p>Your comment has been submitted.</p><p>We appericate your opinion.</p></div></div>".
			"<div class='actions'>".
				"<div class='ui button' onclick='cancel()'>Ok</div>".
			"</div>";
	}
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
<?php
class Visitors_model extends CI_Model {
	
	var $name = '';
	var $email = '';
	
	function __construct() {
		parent::__construct();
	}
	
	function submitController() {
	}
	
	function visitors_getall() {
		$query = $this->db->get('visitors');
		return $query->result();
	}
	
	function visitors_get($id) {
		$query = $this->db->get('visitors', array('id'=>$id));
		return $query->row_array();
	}
	
	function insert_entry() {
		/*	
		$this->input->post(NULL, TRUE); // returns all POST items with XSS filter 
		$this->input->post(); // returns all POST items without XSS filter
		*/
		$this->name = $this->input->post('name', TRUE);
		$this->email = $this->input->post('email', TRUE);
		$this->db->insert('visitors', $this);
		return $this->db->insert_id();
	}
}

?>
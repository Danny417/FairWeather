<?php
class Comments_model extends CI_Model {
	
	var $subject = '';
	var $content = '';
	var $createDate = '';
	var $visitorId = '';
	
	function __construct() {
		parent::__construct();
	}
	
	function comments_getall() {
		$query = $this->db->get('comments');
		return $query->result();
	}
	
	function comments_get($id) {
		$query = $this->db->get('comments', array('id'=>$id));
		return $query->row_array();
	}
	
	function insert_entry() {
		/*	
		$this->input->post(NULL, TRUE); // returns all POST items with XSS filter 
		$this->input->post(); // returns all POST items without XSS filter
		*/
		$this->subject = $this->input->post('subject', TRUE);
		$this->content = $this->input->post('content', TRUE);
		$this->db->insert('entries', $this);
	}
}

?>
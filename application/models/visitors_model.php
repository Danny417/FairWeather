<?php
class Visitors_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function visitors_getall() {
		$this->load->database();
		$query = $this->db->get('visitors');
		return $query->result();
	}
}

?>
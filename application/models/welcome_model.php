<?php
 class welcome_model extends CI_Model
{
	public function __construct() 
	{
		parent::__construct();
	}
	 public function cust1()
	{
		$cust = $this->input->post('custom');
		$this->db->select('customer_id as id,customer_name as name');
		$this->db->from('customer');
		$this->db->where('deleted','no');
		$this->db->like('customer_id', $cust); 
		$query = $this->db->get(); 
		return $query->result();
	}
}
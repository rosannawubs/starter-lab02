<?php

/// a model named images
class Images extends CI_Model {

	// constructor (a good practice)
	function __construct()
	{
		parent::__construct();
	}

        // return all images, descending order by posst date
	function newest()
	{
		$this->db->order_by("id", "desc");
                $this->db->limit(3);
		$query = $this->db->get('images');
		return $query->result_array();
        }
        
	// return all images, descending order by posst date
	function all()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('images');
		return $query->result_array();
        }
}
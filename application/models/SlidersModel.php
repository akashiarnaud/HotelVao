<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class SlidersModel extends CI_Model{

	public function get_All()
	{
		$query = $this->db->get('sliders');
		return $query->result_array();
	}


}

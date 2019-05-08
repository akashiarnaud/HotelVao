<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class Portifolio extends CI_Model{
	public function get_All()
	{
		$query = $this->db->get('portifolio');
		return $query->result_array();
	}
	public function update($id,$image,$title,$descri)
	{
		$this->title = $title;
		$this->image = $image;
		$this->descri= $descri;
		$this->db->where('id',$id);
		$this->db->update('portifolio',$this);
	}
}

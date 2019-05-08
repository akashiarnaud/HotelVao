<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class MenuModel extends CI_Model{

	public function get_All()
	{
		$query = $this->db->get('menu');
		return $query->result_array();
	}
	public function update($id,$nom)
	{
		$this->nom = $nom;

		$this->db->where('id',$id);
		$this->db->update('menu',$this);
	}

}

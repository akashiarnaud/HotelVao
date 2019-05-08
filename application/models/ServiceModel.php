<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class ServiceModel extends CI_Model{
	public function get_All()
	{
		$query = $this->db->get('service');
		return $query->result_array();
	}
	public function update($id,$nom,$descri)
	{
		$this->nom = $nom;
		$this->descri= $descri;
		$this->db->where('id',$id);
		$this->db->update('Service',$this);
	}
}

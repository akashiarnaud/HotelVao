<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:51
 */
class TeamModel extends CI_Model{
	public function get_All()
	{
		$query = $this->db->get('team');
		return $query->result_array();
	}
	public function update($id,$nom,$role)
	{
		$this->nom = $nom;
		$this->role= $role;
		$this->db->where('id',$id);
		$this->db->update('team',$this);
	}
}

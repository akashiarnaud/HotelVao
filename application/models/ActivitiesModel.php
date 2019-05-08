<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class ActivitiesModel extends CI_Model{

	public function get_All()
	{
		$query = $this->db->get('activities');
		return $query->result_array();
	}
	public function insert($nom,$image)
	{
	  $this->load->library('upload');
			$this->nom = $nom;
		  $this->image = $image;
		$this->db->insert('activities', $this);

	}

	public function update($id,$nom,$image)
	{
	  $this->load->library('upload');
			$this->nom = $nom;
	  $this->image = $image;

			$this->db->where('id',$id);
			$this->db->update('activities',$this);

	}

	public function delete($id)
	{
			$this->db->where('id', $id);
			$this->db->delete('activities');
	}

}

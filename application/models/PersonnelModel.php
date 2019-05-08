<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class PersonnelModel extends CI_Model{

	public function get_All()
	{
		$query = $this->db->get('personnel');
		return $query->result_array();
	}
	public  function insert($nom,$fonction,$image)
      {
        $this->load->library('upload');
              $this->nom = $nom;
			$this->description = $fonction;
			$this->image = $image;
          $this->db->insert('personnel', $this);

      }

      public function update($id,$nom,$fonction,$image)
      {
        $this->load->library('upload');
              $this->nom = $nom;
        $this->description = $fonction;
        $this->image = $image;

              $this->db->where('id',$id);
              $this->db->update('personnel',$this);

      }

      public function delete($id)
      {
              $this->db->where('id', $id);
              $this->db->delete('personnel');
      }
}

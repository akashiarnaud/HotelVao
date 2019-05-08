<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 11:59
 */
class ActivitiesDetailsModel extends CI_Model{
	public function all(){
		$sql = "SELECT a.nom as nomP,a.image as imageP,d.nom as nom,d.id,d.description,d.image as img FROM activities as a join activitiesdetails as d on a.id=d.idActivities";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_All()
	{
		$query = $this->db->get('activitiesdetails');
		return $query->result_array();
	}
	public function get_All_by_id($id)
	{
		return $this->db->get_where('activitiesdetails',array('idActivities' => $id))->result_array();
	}
	public  function insert($idActivities,$nom,$description,$image)
      {
		$this->load->library('upload');
			$this->idActivities = $idActivities;
              $this->nom = $nom;
			$this->description = $description;
			$this->image = $image;
          $this->db->insert('ActivitiesDetails', $this);

      }

      public function update($id,$idActivities,$nom,$description,$image)
      {
        $this->load->library('upload');
		$this->idActivities = $idActivities;
		$this->nom = $nom;
	  $this->description = $description;
	  $this->image = $image;

              $this->db->where('id',$id);
              $this->db->update('ActivitiesDetails',$this);

      }

      public function delete($id)
      {
              $this->db->where('id', $id);
              $this->db->delete('ActivitiesDetails');
			}
			public function deleteDetails($idA)
      {
              $this->db->where('idActivities', $idA);
              $this->db->delete('ActivitiesDetails');
      }
}

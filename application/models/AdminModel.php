<?php
class AdminModel extends CI_Model
{
	//base

	public function get_All()
	{
		$query = $this->db->get('admin');
		return $query->    result_array();
	}

	public function connexion($email, $password){
		$query = $this->db->query('SELECT login , mdp FROM admin');
		foreach($query->result_array() as $row){
			if($row['login'] == $email && $row['mdp'] == $password)
				return true;
		}
		return false;
	}

	public function get_byID($id)
	{
		return $this->db->get_where('admin',array('ID' => $id))->row();
	}

	public function get_byLogin($login)
	{
		return $this->db->get_where('admin',array('login' => $login))->row();
	}

	public  function insert($login,$mdp)
	{
		$this->login = $login;
		$this->mdp = $mdp;
		$this->db->insert('client', $this);
	}

	public function update($id,$login,$mdp)
	{
		$this->login = $login;
		$this->mdp = $mdp;
		$this->db->where('id',$id);
		$this->db->update('admin',$this);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('admin');
	}
}
?><?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 09/10/2018
 * Time: 23:01
 */

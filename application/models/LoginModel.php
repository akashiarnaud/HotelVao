<?php
class LoginModel extends CI_Model
{
	//base

	public function get_All()
	{
		$query = $this->db->get('login');
		return $query->    result_array();
	}

	public function connexion($user1, $pass){
		$query = $this->db->query('SELECT user1 , pass FROM login');
		foreach($query->result_array() as $row){
			if($row['user1'] == $user1 && $row['pass'] == $pass)
				return true;
		}
		return false;
	}

	public function get_byID($id)
	{
		return $this->db->get_where('login',array('id' => $id))->row();
	}

	public function get_byLogin($login)
	{
		return $this->db->get_where('login',array('user1' => $login))->row();
	}

	public  function insert($login,$mdp)
	{
		$this->login = $login;
		$this->mdp = $mdp;
		$this->db->insert('login', $this);
	}

	public function update($id,$login,$mdp)
	{
		$this->login = $login;
		$this->mdp = $mdp;
		$this->db->where('id',$id);
		$this->db->update('login',$this);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('login');
	}
}


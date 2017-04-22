<?php
	class M_regis extends CI_Model{
		public function tambah($username, $email, $password,$address, $group){
			$data = array(
				'username' => $username,
				'email' => $email,
				'password' => $password,
				
				'group' => $group,
				);
			$this->db->insert('users',$data);
		}
	} 
?>
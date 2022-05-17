<?php
	class Login_model extends CI_Model{
		function connect($username , $mdp){
			$list = array();
			$req = "select * from admin where nom='%s' and mdp = sha1('%s')";
			$req = sprintf($req,$username,$mdp);
			$query=$this->db->query($req);
			foreach ($query->result_array() as $row){
				$list[] = $row;
			}
			return $list;
		}
	}
?>

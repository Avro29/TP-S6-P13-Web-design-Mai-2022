<?php
defined('BASEPATH') OR edit('No direct script access allowed');

class Rechauffement_model extends CI_Model{
	function list(){
		$list = array();
		$req = 'select r.id,r.lieu,r.daty,t.nom as typeR,d.url,d.photo,d.titre from rechauffement as r LEFT JOIN detail as d ON (r.id = d.idRechauffement) JOIN typeRechauffement as t ON (r.idType = t.id)';
		$query = $this->db->query($req);
		foreach ($query->result_array() as $row){
			$list[] = $row;
		}
		return $list;
	}

	function listCat(){
		$list = array();
		$req = 'select * from typeRechauffement';
		$query = $this->db->query($req);
		foreach ($query->result_array() as $row){
			$list[] = $row;
		}
		return $list;
	}

	function listClimParCat($id){
		$list = array();
		$req = 'select r.id,r.lieu,r.daty,t.nom as typeR,d.url,d.photo,d.titre from rechauffement as r LEFT JOIN detail as d ON (r.id = d.idRechauffement) JOIN typeRechauffement as t ON (r.idType = t.id) where r.idType = %s';
		$req = sprintf($req, $id);
		$query = $this->db->query($req);
		foreach ($query->result_array() as $row){
			$list[] = $row;
		}
		return $list;
	}

	function getFiche($id){
		$list = array();
		$req = 'select r.lieu,r.daty,t.nom as typeR,d.url,d.photo,d.titre,d.article from rechauffement as r LEFT JOIN detail as d ON (r.id = d.idRechauffement) JOIN typeRechauffement as t ON (r.idType = t.id) where r.id = %s';
		$req = sprintf($req, $id);
		$query = $this->db->query($req);
		foreach ($query->result_array() as $row){
			$list[] = $row;
		}
		return $list;
	}
}
?>

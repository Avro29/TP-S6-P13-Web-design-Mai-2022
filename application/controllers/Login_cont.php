<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_cont extends CI_Controller {
	public function index(){
		$this->load->model('Login_model');
		$user = $this->input->post('user');
		$mdp = $this->input->post('mdp');
		echo $mdp;
		echo $user;
		$rep = $this->Login_model->connect($user , $mdp);
		if (count($rep) == 0){
			$this->load->view('login');
		}
		if (count($rep) == 1){
			$this->session->set_userdata('connecter',$rep[0]['id']);
			redirect(base_url("Examples/liste"));
		}
	}
}
?>

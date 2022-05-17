<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	

	public function index()
	{
		$this->load->model('Rechauffement_model');
		$liste['view'] = "listeFront.php";
		$liste['liste'] = $this->Rechauffement_model->listCat();
		$liste['can'] = $this->Rechauffement_model->listClimParCat(1);
		$liste['mon'] = $this->Rechauffement_model->listClimParCat(2);
		$liste['fon'] = $this->Rechauffement_model->listClimParCat(3);
		$liste['rehetra'] = $this->Rechauffement_model->list();
		$this->load->view('templateFront',$liste);
	}
	
	public function index2()
	{
		$this->load->view('login');
	}

	public function fiche($id)
	{
		$this->load->model('Rechauffement_model');
		$liste['liste'] = $this->Rechauffement_model->listCat();
		$liste['fiche'] = $this->Rechauffement_model->getFiche($id);
		$liste['rehetra'] = $this->Rechauffement_model->list();
		$this->load->view('fiche',$liste);
	}

	public function deco()
	{
		$this->session->sess_destroy();
		$this->load->model('Rechauffement_model');
		$liste['view'] = "listeFront.php";
		$liste['liste'] = $this->Rechauffement_model->listCat();
		$liste['can'] = $this->Rechauffement_model->listClimParCat(1);
		$liste['mon'] = $this->Rechauffement_model->listClimParCat(2);
		$liste['fon'] = $this->Rechauffement_model->listClimParCat(3);
		$liste['rehetra'] = $this->Rechauffement_model->list();
		$this->load->view('templateFront',$liste);
	}
}

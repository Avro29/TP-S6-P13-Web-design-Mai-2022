<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function liste()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('rechauffement');
			$crud->set_relation('idType','typeRechauffement','nom');
			$crud->display_as('idType', 'Type de rechauffement');
			$crud->set_subject('Rechauffement');
			//$crud->required_fields('lieu');
			//$crud->columns('lieu','daty','nom');

			
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function detail()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('detail');
			$crud->set_relation('idRechauffement','rechauffement','daty');
			$crud->display_as('idRechauffement', 'Date');
			$crud->set_subject('Detail');
			//$crud->required_fields('lieu');
			//$crud->columns('lieu','daty','nom');

			$crud->set_field_upload('photo','assets/images');
			$crud->callback_before_insert(array($this,'slugify'));
			$crud->callback_before_update(array($this,'slugify'));

			
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function slugify($array) 
	{
		$divider = '-';

		$array['url'] = $array['titre'];
		// replace non letter or digits by divider
		$array['url'] = preg_replace('~[^\pL\d]+~u', $divider, $array['url']);

		// transliterate
		$array['url'] = iconv('utf-8', 'us-ascii//TRANSLIT', $array['url']);

		// remove unwanted characters
		$array['url'] = preg_replace('~[^-\w]+~', '', $array['url']);

		// trim
		$array['url'] = trim($array['url'], $divider);

		// remove duplicate divider
		$array['url'] = preg_replace('~-+~', $divider, $array['url']);

		// lowercase
		$array['url'] = strtolower($array['url']);

		if (empty($array['url'])) {
			return 'n-a';
		}

		return $array;
	}
	

}

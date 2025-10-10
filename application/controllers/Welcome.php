<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Pagina_model','mP');
	}

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index(){
		$datos["aire_seccion"]=$this->mP->consultar_aires(1);
		$datos["plomeria_seccion"]=$this->mP->consultar_plomeria(2);
		$datos["baño_seccion"]=$this->mP->consultar_baño(3);
		$datos["piso_seccion"]=$this->mP->consultar_piso(4);
		$datos["cocina_seccion"]=$this->mP->consultar_cocina(5);
		$datos["hogar_seccion"]=$this->mP->consultar_hogar(6);
		$datos["electricidad_seccion"]=$this->mP->consultar_electricidad(7);
		$datos["ferreteria_seccion"]=$this->mP->consultar_ferreteria(8);

		$this->load->view('welcome_message',$datos);
		$this->load->view('secciones/header');
		$this->load->view('secciones/footer');
		//$this->load->view('company');

		
	}

	public function principal(){
		$datos["nombre"]="Karime Ceballos Castillo0";
		$datos["correo"]="karimeceballoscastillo@gmail.com";
		$this->load->view('welcome_message',$datos);
	}
}
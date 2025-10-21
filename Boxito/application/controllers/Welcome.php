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
	
	 //PRINCIPAL
	public function index(){
		$datos["aire_seccion"]=$this->mP->consultar_aires(1);
		$datos["plomeria_seccion"]=$this->mP->consultar_plomeria(2);
		$datos["baño_seccion"]=$this->mP->consultar_baño(3);
		$datos["piso_seccion"]=$this->mP->consultar_piso(4);
		$datos["cocina_seccion"]=$this->mP->consultar_cocina(5);
		$datos["hogar_seccion"]=$this->mP->consultar_hogar(6);
		$datos["electricidad_seccion"]=$this->mP->consultar_electricidad(7);
		$datos["ferreteria_seccion"]=$this->mP->consultar_ferreteria(8);

		$this->load->view('secciones/header');
		$this->load->view('welcome_message',$datos);
		$this->load->view('secciones/footer');
	}

	//QUIENES SOMOS
	public function nosotros() {
		$this->load->view('secciones/header');
		$this->load->view('nosotros/nosotros');
		$this->load->view('secciones/footer');
	}

	public function mision() {
		$this->load->view('secciones/header');
		$this->load->view('nosotros/mision');
		$this->load->view('secciones/footer');
	}

	public function vision() {
		$this->load->view('secciones/header');
		$this->load->view('nosotros/vision');
		$this->load->view('secciones/footer');
	}

	//DEPARTAMENTOS
	public function aire() {
		$datos["aire_seccion"] = $this->mP->consultar_aires(1);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/aire', $datos);
		$this->load->view('secciones/footer');
	}

	public function plomeria() {
		$datos["plomeria_seccion"]=$this->mP->consultar_plomeria(2);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/plomeria', $datos);
		$this->load->view('secciones/footer');
	}

	public function baño() {
		$datos["baño_seccion"]=$this->mP->consultar_baño(3);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/baños', $datos);
		$this->load->view('secciones/footer');
	}

	public function piso() {
		$datos["piso_seccion"]=$this->mP->consultar_piso(4);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/piso', $datos);
		$this->load->view('secciones/footer');
	}

	public function cocina() {
		$datos["cocina_seccion"]=$this->mP->consultar_cocina(5);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/cocina', $datos);
		$this->load->view('secciones/footer');
	}

	public function hogar() {
		$datos["hogar_seccion"]=$this->mP->consultar_hogar(6);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/hogar', $datos);
		$this->load->view('secciones/footer');
	}

	public function electricidad() {
		$datos["electricidad_seccion"]=$this->mP->consultar_electricidad(7);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/electricidad', $datos);
		$this->load->view('secciones/footer');
	}

	public function ferretria() {
		$datos["ferreteria_seccion"]=$this->mP->consultar_ferreteria(8);
		$this->load->view('secciones/header');
		$this->load->view('departamentos/ferreteria.php', $datos);
		$this->load->view('secciones/footer');
	}


	public function departamento() {
		$datos["aire_seccion"]=$this->mP->consultar_aires(1);
		$datos["plomeria_seccion"]=$this->mP->consultar_plomeria(2);
		$datos["baño_seccion"]=$this->mP->consultar_baño(3);
		$datos["piso_seccion"]=$this->mP->consultar_piso(4);
		$datos["cocina_seccion"]=$this->mP->consultar_cocina(5);
		$datos["hogar_seccion"]=$this->mP->consultar_hogar(6);
		$datos["electricidad_seccion"]=$this->mP->consultar_electricidad(7);
		$datos["ferreteria_seccion"]=$this->mP->consultar_ferreteria(8);

		$this->load->view('secciones/header');
		$this->load->view('departamento',$datos);
		$this->load->view('secciones/footer');
	}

	public function oferta() {
		$this->load->view('secciones/header');
		$this->load->view('oferta');
		$this->load->view('secciones/footer');
	}

	
	public function contactanos(){
		$this->load->view('secciones/header');
		$this->load->view('contactanos');
		$this->load->view('secciones/footer');
	}

	/*public function nosotros() {
		$this->load->view('secciones/header');
		$this->load->view('nosotros');
		$this->load->view('secciones/footer');
	}*/


}
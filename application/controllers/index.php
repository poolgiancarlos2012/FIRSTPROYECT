<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->layout->setLayout('template1');

  }

	public function index()
	{
    $this->layout->view('index'); // por defecto se carga el layout del constructor
	}

  public function nosotros(){


    $this->layout->setLayout('template2'); // cargar un layout para nosotros
    $this->layout->setTitle("Title para Nosotros");
    $this->layout->setKeywords("setKeywords");
    $this->layout->setDescripcion("setDescription");
    $this->layout->view('nosotros'); //contenido
  }

}

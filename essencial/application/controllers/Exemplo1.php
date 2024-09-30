<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Exemplo1_model', 'apelido_model');

  }

	public function index() {
    $dados['titulo'] = 'Essa minha primeira view';
    $dados['conteudo'] = 'vamo que vamo';
    $this->load->view('exemplo1', $dados);
  }

  public function login() {
    $this->apelido_model->salvar();
  }
}

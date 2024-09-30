<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1_model extends CI_Model {

  function __construction() {
    parent::__construction();
  }

  public function salvar() {
    echo 'Executando método login e o parametro e agora no model ';
  }
}

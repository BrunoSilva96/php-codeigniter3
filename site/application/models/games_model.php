<?php

class Games_model extends CI_model {

  public function index(){
    
    return $this->db->get("tb_games")->result_array();
  }
}
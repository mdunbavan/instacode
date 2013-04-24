<?php 
class Sessiontest extends CI_Controller { 
  
  public function index() 
  { 
    if($this->session->userdata('markdunbavan')) 
    { 
      echo '<p>Session variable set</p>'; 
    } else { 
      echo '<p>No session variable set</p>'; 
      $this->session->set_userdata('dunbavan', 'mark'); 
    } 
     
  } 
}


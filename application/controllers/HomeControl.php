<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 *
 */
class HomeControl extends CI_Controller
{

  function index()
  {
    $this->load->model('HomeModel');

    $tampilData = $this->HomeModel->getData();

    $this->load->view("HomeView", array("tampilData" => $tampilData));

    $this->load->helper('Nama helper');
  }
}

 ?>

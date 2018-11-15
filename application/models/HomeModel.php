<?php
/**
 *
 */
class HomeModel extends CI_Model
{

 public function getData()
  {
    $data = array(
        'Nama' => 'Blanca Jaya',
        'Pekerjaan' => 'Mahasiswa',
        'Kampus' => 'Stikom Bali',
    );
    return $data;
  }
}

 ?>

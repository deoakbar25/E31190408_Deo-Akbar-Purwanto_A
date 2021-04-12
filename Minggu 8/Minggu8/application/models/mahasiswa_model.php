<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Deo','Prodi'=>'TIF'],
        ['Nama'=>'Akbar','Prodi'=>'MIF'],
        ['Nama'=>'Purwanto','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}
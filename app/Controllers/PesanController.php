<?php

namespace App\Controllers;

class PesanController extends BaseController
{
    // digunakan untuk memanggil view tampil 
   public function proses($p = 'kosong')
   {
       $data['pesan'] = $_GET['pesan'];
       return view('tampil', $data);
}
  // saat public function input dipanggil lalu view input akan dipanggil oleh function
public function input()
{
   return view('input');
   }
}
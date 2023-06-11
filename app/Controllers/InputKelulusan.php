<?php

      namespace App\Controllers;
      
      class InputKelulusan extends BaseController
    {
      // saat public function index dipanggil lalu view InputData akan dipanggil oleh function
      public function index()
    {
      return view('InputData');
    }
    // digunakan untuk memanggil view StatusKelulusan dengan menyimpan nama, nim, dan status yang akan ditampilkan ketika dipanggil
    public function prosesLulus()
    {
        $Data['Nama'] = $_GET['Nama'];
        $Data['Nim'] = $_GET['Nim'];
        $Data['Status'] = $_GET['Status'];

        return view('StatusKelulusan', $Data);
    }
}
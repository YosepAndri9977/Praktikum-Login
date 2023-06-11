<?php

      namespace App\Controllers;
      
      class Ktp extends BaseController
    {
      // saat public function indek dipanggil lalu view profil akan dipanggil oleh function
      public function index()
    {
      return view('profil');
    }
}
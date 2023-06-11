<?php

      namespace App\Controllers;
      
      class ktm extends BaseController
    {
      // saat public function indek dipanggil lalu view ktm akan dipanggil oleh function
      public function index()
    {
      return view('Ktm');
    }
}
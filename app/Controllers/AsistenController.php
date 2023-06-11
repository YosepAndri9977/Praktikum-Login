<?php
namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController{

   // saat public function index dipanggil lalu view AsistenView akan dipanggil oleh function
    public function index()
    {
        $Model = new AsistenModel();// membuat instance baru dari AsistenModel


            $Data['asisten'] = $Model-> findAll(); // memanggil method findAll() dan menyimpan hasilnya dalam $Data['asisten']


                     return view('AsistenView', $Data);// mengembalikan sebuah view yang bernama 'AsistenView' beserta dengan array $Data
    }
    }
?>
<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return view('welcome-message');
    }

    public function coba()
    {
        echo "Hello World";
    }
    
    public function about()
    {
        echo 'Hallo, nama saya Yosep.';
    }
}
<?php
   namespace App\Controllers;
   class AsistenController2 extends BaseController
{
        public function simpan()
{
    helper('form');
    // Memeriksa apakah melakukan submit data atau tidak.
     if (!$this->request->is('post')) {
    return view('/asisten/simpan');
  }
// Mengambil data yang disubmit dari form
    $post = $this->request->getPost(['nim', 'nama', "praktikum", "ipk"]);
 // Mengakses Model untuk menyimpan data
    $model = model(AsistenModel2::class);
    $model->simpan($post);
    return view('/asisten/success');
   }
   public function update()
  {
   helper('form');
   // Memeriksa apakah melakukan submit data atau tidak.
   if(!$this->request->is('post')){
      return view('asisten/update');
   }
   // Mengambil data yang disubmit dari form
   $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);

   // Digunakan untuk mengakses model untuk simpan data
   $model = model(AsistenModel2::class);
   $model->perbarui($post);
   return view('asisten/success');

   }
   public function delete()
   {
    helper('form');
    // Memeriksa apakah melakukan submit data atau tidak.
    if(!$this->request->is('post')){
       return view('asisten/delete');
    }
    // Mengambil data yang disubmit dari form
    $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);
    
    // Digunakan untuk mengakses model untuk simpan data
    $model = model(AsistenModel2::class);
    $model->hapus($post);
    return view('asisten/success');
 
    }
}
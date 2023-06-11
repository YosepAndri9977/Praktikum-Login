<?php
    namespace App\Models;
    use CodeIgniter\Model;

        class ModelLogin extends Model
   {
     // Digunakan untuk mendefinisikan tabel yang dibuat
        protected $table = 'login';// Digunakan untuk memberi nama pada tabel yang digunakan
        protected $primaryKey = 'username';// Sebagai primary key pada tabel
        protected $allowedFields = ['username', 'password'];// Sebagai perintah yang akan digunakan

       public function Mengambil($User)
      {
        return $this->where('username', $User)->first();
   }
}
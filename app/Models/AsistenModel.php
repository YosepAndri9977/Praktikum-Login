<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'Asisten';//digunakan untuk menentukan nama tabel yang akan digunakan oleh model tersebut. 
      protected $primaryKey = 'nim';// digunakan untuk menentukan primary key dari tabel yang digunakan oleh model tersebut

 //digunakan untuk menentukan field-field apa saja yang dapat diisi pada saat melakukan operasi create atau update pada model tersebut.
         protected $allowedFields = ['nim', 'nama', 'kelas', 'ipk'];
}
?>
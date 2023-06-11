<?php
    namespace App\Models;
    use CodeIgniter\Model;
        class AsistenModel2 extends Model
   {
     // Digunakan untuk mendefinisikan tabel yang dibuat
        protected $table = 'asisten';
        protected $primaryKey = 'nim';
        protected $allowedFields = ['nim', 'nama', "praktikum", "ipk"];
       public function simpan($record)
      {
     //  Digunakan untuk menyimpan data
       $this->save([
       'nim' => $record['nim'],
       'nama' => $record['nama'],
       'praktikum' => $record['praktikum'],
       'ipk' => $record['ipk'],
        ]);
   }
   public function perbarui($record)
   {
     //  Digunakan untuk update data
     $this->update($record['nim'],
           ['nama' => $record['nama'], 
           'praktikum' => $record['praktikum'],
           'ipk' => $record['ipk'],
           ]);
     }
     public function hapus($nim)
{
     //  Digunakan untuk menghapus data
     $this->delete($nim);

  }
}
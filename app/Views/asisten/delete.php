<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Digunakan menampilkan judul halaman -->
    <title>Form Pendaftaran</title>
   </head>
 <body>
    <!-- Digunakan untuk membuat dan menampilkan tajuk pada halaman -->
    <h1>DELETE ASISTEN PRAKTIKUM</h1>
    <!-- Berfungsi untuk action setelah dipanggil -->
       <form action="/asisten/delete" method="post">
        <?= csrf_field() ?>
    <!-- untuk membuat label nim -->
      NIM:<input type="text" name="nim" /><br />
      <!-- untuk membuat tombol submit -->
   <input type="submit" name="" value="Delete" />
  </form>
</body>
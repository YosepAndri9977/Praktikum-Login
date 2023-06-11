<html lang="en">
   <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tampil Lulus</title>
  </head>
<body>
    <!-- Menampilkan tajuk STATUS KELULUSAN MAHASISWA  -->
    <h2>STATUS KELULUSAN MAHASISWA</h2>
    <!-- Untuk menampilkan text dari controller yang sudah dibuat -->
    <?= " Mahasiswa Dengan nama " . $Nama. " NIM ".$Nim. " berhasil menyelesaikan studi S1 dengan predikat ".$Status; ?>
</body>
</html>
<!DOCTYPE html>

<head>
    <title>KTP</title>
   </head>
<body>
  <!-- Untuk membuat tampilan tabel border -->
       <table border="1">
    <tr>
      <!-- Untuk menampilkan tulisan atau tajuk yaitu KTP -->
        <td colspan="3">
         <center>KTP</center>
  </td>
</tr>
<tr>
  <!-- Membuat tampilan tulisan dan memasukanny pada tabel border yaitu Nama dan gambar Mickey Mouse -->
      <td>Nama</td>
      <td>Mickey Mouse</td>
      <td rowspan="5"><img width='100' src="cep.png"></td>
  </tr>
<tr>
  <!-- Membuat tampilan tulisan dan memasukanny pada tabel border yaitu NIK -->S
    <td>NIK</td>
    <td>123456789</td>
  </tr>
<tr>
  <!-- Membuat tampilan tulisan dan memasukanny pada tabel border yaitu Tempat Lahir -->
      <td>Tempat Lahir</td>
      <td>Yogyakarta</td>
  </tr>
<tr>
  <!-- Membuat tampilan tulisan dan memasukannya pada tabel border yaitu Tanggal Lahir -->
      <td>Tanggal Lahir</td>
      <td>1 Januari 2001</td>
  </tr>
<tr>
  <!-- Membuat tampilan tulisan dan memasukannya pada tabel border yaitu Alamat -->
      <td>Alamat:</td>
       <td>Yogyakarta, Indonesia</td>
  </tr>
    </table>
    <!-- Membuat sebuah tombol Lihat KTM yang saat ditekan akan pindah ke tampilan KTM -->
    <a href = <?= base_url("Ktm")?>> Lihat KTM </a>
</body>
</html>
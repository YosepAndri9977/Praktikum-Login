<html lang="en">
<head>
    <title>Tampilan</title>
    <meta charset="utf">
    <meta name="viewport" content="width=device-width, initial-scale">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
       <!-- digunakan untuk membuat tajuk atau tulisan pendaftaran asisten praktikum -->
        <h2>Pendaftaran Asisten Praktikum</h2><br>
       <!-- Untuk membuat tampilan tabel border -->
        <table class="table-bordered">
            <thead>
                <tr>
                     <!-- Membuat tampilan tulisan dan memasukanny pada tabel border -->
                    <th>No</th>
                      <th>NIM</th>
                       <th>Nama</th>
                         <th>Kelas Praktikum</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
<!--  digunakan untuk menampilkan data asisten pada sebuah tabel. Kode tersebut menggunakan perulangan foreach dan menampilkannya pada tabel -->
                <?php foreach ($asisten as $Item):?>
                    <tr>
                        <td><?= $Item['no'] ?>
                     </td>
                          <td><?= $Item['nim'] ?>
                        </td>
                            <td><?= $Item['nama'] ?>
                        </td>
                               <td><?= $Item['praktikum'] ?>
                            </td>
                        <td><?= $Item['ipk'] ?>
                    </td>
                    </tr>

                <?php endforeach;  ?>
            </tbody>
        </table>
    </div>
</body>
</html>
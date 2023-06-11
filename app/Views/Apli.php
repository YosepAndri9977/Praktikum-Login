<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi To Do </title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class ="container mt mx">
    <div class ="mt p bg-success text-white rounded">
<h2> APLIKASI TO-DO LIST</h2>
</div>
    <form action = "<?= base_url("todo/tambah")?>" method = "Post">
        <label for = "masukan">Masukan Kegiatan : </label>
    <br> 
    <br>
            <input type = "text" Name = "kegiatan"> 
            <input type = "submit" Name = "Kirim" value = "Tambahkan">
      </form>
        <br>
        <br>
              <label for = "masukan">Daftar Kegiatan: </label>
              <table class = "table table-primary">
            <thead>
                <tr>
                    <th>Nomer</th>
                    <th class="">Daftar Kegiatan :</th>
                    <th class="visibility: collapse"></th>
                    <th></th>
                    <th></th>
            </thead>
            <tbody>
                <?php $No = 1; foreach($todolist as $item): ?>
                <tr>
                  <td><?= $No ?></td>
                  <td><?= $item["kegiatan"]?></td>
                  <td><a href= "<?= base_url('todo/selesai/'. $item['idkegiatan'])?> "> Selesai</a></td>
                  <td><a href= "<?= base_url('todo/hapus/'. $item['idkegiatan'])?> "> Hapus</a></td>
                </tr>
                <?php $No++; endforeach; ?>
                </tbody>
            </table>

   </body>
</html>
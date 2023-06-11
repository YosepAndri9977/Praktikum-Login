<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- untuk memberi informasi metadata dari halaman web -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
  </head>
<body>
    <!-- Untuk membuat label dan juga input -->
    <form action="./Input" method="get">
        <label for = "Nim"> NIM : </label>
            <input type = "text" Name = "Nim">
    <br>
        <label for = "Nama "> Nama  : </label>
            <input type="text" Name = "Nama">
    <br>
    <!-- Untuk membuat label pilihan yang akan dipilih -->
          <label for="Status">Status Kelulusan  : </label>
            <select Name = "Status" id = "Status">
              <option value = "Memuaskan" > Memuaskan </option>
                <option value ="Sangat Memuaskan"> Sangat Memuaskan </option>
                  <option value ="Cumlaud">Cumlaud</option></select>
                <br>
        <!-- Untuk membuat tombol submit data -->
        <input type="submit" value="Submit Data">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    a {
      text-decoration: none;
      background-color: #3498db;
      color: #fff;
      padding: 10px 15px;
      border-radius: 4px;
      margin-bottom: 20px;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #3498db;
      color: #fff;
    }

    img {
      max-width: 100px;
      max-height: 100px;
    }

    td a {
      text-decoration: none;
      padding: 6px 10px;
      margin: 0 5px;
      border-radius: 4px;
      color: #fff;
    }

    td a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
    <tr>
      <th>Foto</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    // Load file koneksi.php
    include "koneksi.php";
    // Buat query untuk menampilkan semua data siswa
    $sql = $pdo->prepare("SELECT * FROM siswa");
    $sql->execute(); // Eksekusi querynya
    while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
      echo "<tr>";
      echo "<td><img src='images/".$data['foto']."' alt='Foto' width='100' height='100'></td>";
      echo "<td>".$data['nis']."</td>";
      echo "<td>".$data['nama']."</td>";
      echo "<td>".$data['jenis_kelamin']."</td>";
      echo "<td>".$data['telp']."</td>";
      echo "<td>".$data['alamat']."</td>";
      echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
      echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>

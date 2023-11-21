<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi CRUD dengan PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h1 {
      text-align: center;
    }

    table {
      width: 100%;
    }

    td {
      padding: 8px;
    }

    input[type="text"],
    input[type="file"],
    textarea {
      width: calc(100% - 16px);
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"],
    input[type="button"] {
      background-color: #3498db;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
      background-color: #2980b9;
    }

    a {
      text-decoration: none;
    }

    input[type="button"] {
      margin-left: 10px;
      background-color: #e74c3c;
    }

    input[type="button"]:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
    <h1>Tambah Data Siswa</h1>
    <table>
      <tr>
        <td>NIS</td>
        <td><input type="text" name="nis"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
          <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td><input type="file" name="foto"></td>
      </tr>
    </table>
  
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>

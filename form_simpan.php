<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Peminjam</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Tanggal</td>
        <td><input type="text" name="tanggal"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Ruangan</td>
        <td>
        <input type="text" name="ruangan">
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp"></td>
      </tr>
      <tr>
        <td>Kegiatan</td>
        <td><textarea name="kegiatan"></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
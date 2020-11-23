<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Data Peminjaman Tempat</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Ruangan</th>
    <th>Telepon</th>
    <th>Kegiatan</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data peminjaman tempat
  $sql = $pdo->prepare("SELECT * FROM pegawai");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['ruangan']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['kegiatan']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>
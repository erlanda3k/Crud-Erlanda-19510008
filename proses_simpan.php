<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$ruangan = $_POST['ruangan'];
$telp = $_POST['telp'];
$kegiatan = $_POST['kegiatan'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO pegawai(tanggal, nama, ruangan, telp, kegiatan) VALUES(:tanggal,:nama,:ruangan,:telp,:kegiatan)");
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':ruangan', $ruangan);
$sql->bindParam(':telp', $telp);
$sql->bindParam(':kegiatan', $kegiatan);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
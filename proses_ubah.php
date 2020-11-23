<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$ruangan = $_POST['ruangan'];
$telp = $_POST['telp'];
$kegiatan = $_POST['kegiatan'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE pegawai SET tanggal=:tanggal, nama=:nama, ruangan=:ruangan, telp=:telp, kegiatan=:kegiatan WHERE id=:id");
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':ruangan', $ruangan);
$sql->bindParam(':telp', $telp);
$sql->bindParam(':kegiatan', $kegiatan);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>
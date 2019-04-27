<?php
include 'connect.php';
//session_start();

//if(!(isset($_SESSION['user'])))
//{
//header("location: ../login/form-login.php");
//}


$kode_kost = $_POST ['kode_kost'];
$nama_kost = $_POST ['nama_kost'];
$lokasi = $_POST ['lokasi'];
$tipe = $_POST ['tipe'];
$harga = $_POST['harga'];
$tersedia = $_POST ['tersedia'];
$nama_pemilik = $_POST ['nama_pemilik'];
$telp = $_POST ['telp'];



$query = "INSERT INTO tambahdata (kode_kost,nama_kost, lokasi, tipe, harga, tersedia, nama_pemilik, telp)
            VALUES ('$kode_kost','$nama_kost','$lokasi','$tipe','$harga','$tersedia','$nama_pemilik','$telp')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    header("location:tampil-data.php");
}
else{
    echo "Gagal tambah data";
}
echo " <a href='tampil-data.php'>Lihat Data </a>";

?>



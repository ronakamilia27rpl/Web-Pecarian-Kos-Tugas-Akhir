<?php
include 'connect.php';
//session_start();

//if(!(isset($_SESSION['user'])))
//{
//header("location: ../login/form-login.php");
//}


$kode_kost = $_GET ['kode_kost'];

$query = "DELETE FROM tambahdata WHERE kode_kost = $kode_kost";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);
if($num > 0){
    header("location:tampil-data.php");
}
else{
    echo "<p> Gagal tambah data</p> <br>";
}
echo " <p> <a href='tampil-data.php'>Lihat Data </a></p>";

?>



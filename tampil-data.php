<?php
include 'connect.php';
session_start();

//if(!(isset($_SESSION['user'])))
//{
//header("location: form-login1.php");
//}



$query = "SELECT * FROM tambahdata";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>GO KOST - Tambah Data</title>
        <link rel="stylesheet" href="style5.css" type="text/css" >

    </head>

    <body>

    <div class="topnav">
    

   <img src="ukl5.PNG" style="width:60px" >
    
    <a href="add-data.php"  >ADD DATA</a>
    <a href="form-search2.php" >CARI</a>
   
    </div>


    <div class="tengah">

    <div class="kost">

    <div id="judul">
    <h1>Data Kost Sekarang</h1>
    </div>

    <table class="table" id="kost_tab">
     <tr>
     
     <td >
    
       <tr>
          <th>Kode Kost</th>
          <th>Nama Kost</th>
          <th>Lokasi</th>   
          <th>Tipe</th>   
          <th>Harga</th> 
          <th>Tersedia</th>  
          <th>Nama Pemilik</th> 
          <th>Telepon</th>  
          <th colspan='2'>Aksi</th> 
    </tr>
   


<?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
        echo "<tr>";
        echo "<td>" . $data ['kode_kost'] . "</td>";
        echo "<td>" . $data ['nama_kost']. "</td>";
        echo "<td>" . $data ['lokasi'] . "</td>";
        echo "<td>" . $data ['tipe'] . "</td>";
        echo "<td>" . $data ['harga'] . "</td>";
        echo "<td>" . $data ['tersedia'] . "</td>";
        echo "<td>" . $data ['nama_pemilik'] . "</td>";
        echo "<td>" . $data ['telp'] . "</td>";
       
        echo "<td><a id='hapus' href ='delete-data.php?kode_kost=".$data['kode_kost']."'onclick='return confirm(\"Apakah anda yakin akan menhapus data\")'>Hapus</a>  ";
        echo "</tr>";

        $no++;
        }
    }
    else
    {
        echo "<td colspan = '3'>Tidak ada data </td>";

    }
    ?>


       
   
     </tr>
    </table>
    </div>
    </div>
</body>
</head>
</html>
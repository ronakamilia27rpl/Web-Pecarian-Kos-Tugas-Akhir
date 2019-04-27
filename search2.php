<?php
include 'connect.php';

//session_start();

//if(!(isset($_SESSION['user'])))
//{
//header("location: ../login/form-login.php");
//}
$cari = $_GET['cari'];

$query = "SELECT * FROM tambahdata WHERE lokasi LIKE '%$cari%'";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);


 
?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>GO KOST - Hasil</title>
        <link rel="stylesheet" href="style5.css" type="text/css" >

    </head>
    <body>

    <div class="topnav">
    

   <img src="ukl5.PNG" style="width:60px"  >
    
    <a href="add-data.php" id="create">Add Data</a>
    <a href="form-search3.php" id="home">CARI</a>
    
    
    
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
<?php
include 'connect.php';
//if(!(isset($_SESSION['user'])))
////{
//header("location: form-login1.php");
//}




$query = "SELECT * FROM tambahdata";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
?>


<html>
    <head>
        
        <title>GO KOST</title>
        <link rel="stylesheet" href="style2.css" type="text/css" >

    </head>

    <body>

    <div class="topnav">
    

   <img src="ukl5.PNG" style="width:60px"  id="log">

    <a href="add-data.php" id="create">Add Data</a>
   
    <a href="form-search3.php" id="home">CARI</a>

    
    </div>


    <div class="tengah">

    <div class="kost">

    <div id="judul">
    <h1>Tambah Data Kost</h1>

    </div>

    <table id="kost_tab">
     <tr>
     <form action="esekusi-data.php" method="post" name="form_kost">
    
     <td id="carik">

       <p>

        <input type="text" class="form-input" name="kode_kost" placeholder="kode_kost" id="kode_kost">
        <br>
        <input type="text" class="form-input" name="nama_kost" placeholder="Nama" id="nama_kost">
        <br>
        <input type="text" class="form-input" name="lokasi"placeholder="Lokasi" id="lokasi">
        <br>
        <input type="text" class="form-input" name="tipe"placeholder="Tipe" id="tipe">
        <br>
        <input type="text" class="form-input" name="harga"placeholder="Harga" id="harga">
        <br>
        <input type="text" class="form-input" name="tersedia"placeholder="Tersedia" id="tersedia">
        <br>
        <input type="text" class="form-input" name="nama_pemilik"placeholder="Nama Pemilik" id="nama_pemilik">
        <br>
        <input type="text" class="form-input" name="telp"placeholder="Telepon" id="telp">
        <br>
        </p>

        <div>
          <input type="submit" name="submit" onclick="validasiSearch()">
        </div>
       
      

      </td>
     </form>
     </tr>
    </table>
    </div>
    </div>

   
    </html> 
    </head>
</html>
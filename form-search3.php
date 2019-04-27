<?php
include 'connect.php';



$query = "SELECT * FROM tambahdata";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
?>


<html>
    <head>
        
        <title>GO KOST</title>
        <link rel="stylesheet" href="style1a.css" type="text/css" >
        <meta charset="utf-8">

    </head>

    <body>

    <div class="topnav">
   

   <img src="ukl5.PNG" style="width:60px"  >

    <a href="add-data.php" id="create">Add Data</a>
    <a href="form-search.php" id="home">CARI</a>
    
    
    
    </div>

    
    <form action="search2.php" method="get" >
        <input type="search" class="search" id="search" placeholder="Lokasi.." name="cari" >
        <input type="submit"  class="button" id="button"  value="cari" >
    </form>
    
   
    </html> 
    </head>
</html>
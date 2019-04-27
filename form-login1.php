<?php
include 'connect.php';




$query = "SELECT * FROM tambahdata";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>GO KOST -ADMIN</title>
        <link rel="stylesheet" href="style5A.css" type="text/css" >

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
    <h1>login admin</h1>
    </div>

    <table class="table" id="kost_tab">
     <tr>
    
    <form action="login1.php" method="POST"  >

    <label>Username :</label>
    <input type="text" name="username" /> 
    <br>
    <br>
    <label>Password :</label>
    <input type="password" name="password" />
    <br>
    <br>
    <input type="submit"  value="Login" />

     </tr>
    </table>
    </div>
    </div>
</body>
</head>
</html>
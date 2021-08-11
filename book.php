
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
        <center><h1>University books</h1></center>
    <?php
    include "link.php";
include "connection.php";
$selectquery = "select * from jobregistration";
$query = mysqli_query($con,$selectquery);

while($resu = mysqli_fetch_array($query))
{
    ?>
     <div class="container">   
        <div class="row">
<div class="col-sm-6">
    <div class="card">
    <img src="1.jpeg" alt="book1" class="img-fluid">
    <center>
    <h4><?php 
        echo $resu['email']; ?></h4>
        <?php 
        echo $resu['username']; ?>
    </center>
    </div>
    </div>
        <div class="col-sm-6">
    <div class="card">
    <img src="1.jpeg" alt="book1" class="img-fluid">
    <center>
    <h4><?php 
        echo $resu['email']; ?></h4>
        <?php 
        echo $resu['username']; ?>
</center>
    </div>
    </div>
        </div>
    </div>
    <br>
</div>
<?php
}
?>
</body>
</html>
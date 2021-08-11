
<?php 
    include_once "navbar2.php";
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

    <title>
        college books
</title>
   
    <style>

        .contact_body{
    font-family: 'Karla', sans-serif;
    font-size: 20px;
}
.contact_head{
    font-family: 'Martel', serif;
    font-size: 50px;
    color: steelblue;
}
.img-class{
     height: 350px;
     width: 300px;
}
.btn-primary{
    padding: 0px 24px 0px;
    width: 150px;
}
.btn-success{
    width: 162px;
}
    </style>
}
</head>
<body>
<div class="container">
    <br>
    <center><h3 class="contact_head" style="font-size: 30px;">Other Books</h3></center>
    <br>
 
       <?php
        $con = mysqli_connect("localhost","root","","practice");
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
       // echo"done";

      
       $displayquery=" select * from imgupload WHERE category='other'"; 
       $querydisplay= mysqli_query($con, $displayquery );

       if($querydisplay-> num_rows > 0)
       {?>
       
                   <div class="row">
                 
       <?php
       while ($result = mysqli_fetch_array($querydisplay) ) 
       {?>
                                  
    <div class="col-lg-4 col-sm-6">  
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <img src=" <?php echo $result['image']; ?>">
        
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Title:</span><i><?php echo $result["bookname"]  ?></i></h1>
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Author:</span><i><?php echo $result["authorname"]  ?></i></h1>
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Edition:</span><i><?php echo $result["edition"]  ?></i></h1>
        <p class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Price:</span><i><?php echo $result["price"] ?></i></p>
          
          <div class="btn-group">
           <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="view_prod.php?id=<?php echo $result['id'];?>">View</a>
           <style>
</style>
               
                    <!--button id="myBtn" type="button" class="btn btn-primary">View</button-->

            <form action="manage_cart.php" method="POST"> 
                            <button type="submit" name="Add_to_cart" class="btn btn-success">Add to cart</button>
                            <input type="hidden" name="Item_Name" value= "<?php echo $result["bookname"]?>">
                            <input type="hidden" name="Price" value="<?php echo $result["price"]  ?>">
            </form>
                </div>
       
      </div>

          <br>
    </div>   
         
     <br>

<?php

}
?>
</div>
<?php
        
    }
  else{  
    echo "<center>";  
    echo "<h1>";
    echo "SORRY! No books found check again later";
    echo "</h1>";
    echo "</center>";
  }

   ?>  
</body>
</html>
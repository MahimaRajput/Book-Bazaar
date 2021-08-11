<?php
include_once "navbar2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Josefin+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK BAZAAR</title>
</head>
<style>

         body {
     overflow-x: hidden;
            }
        .carousel-control-prev-icon,.carousel-control-next-icon{
            
            border: 10px;
        }
        .carousel-item img{
      height: 500px;
      width: 100%;
      margin-top: px;
  }
.contact_body{
    font-family: 'Karla', sans-serif;
    font-size: 20px;
}
.contact_head{
    font-family: 'Martel', serif;
    font-size: 50px;
    color: steelblue;

}
.btn-primary{
    padding: 0px 24px 0px;
    width: 150px;
}
.btn-success{
    width: 162px;
}
</style>
<body>


<div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li> 
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
            <li data-target="#slider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" alt="slide1 image">
                <!--div class="bottom-left">BALLALLALALLALALA</div-->
            </div>
            <div class="carousel-item">
                <img src="6.jpg" alt="slide2 image">
               
            </div>
            <div class="carousel-item">
                <img src="3.jpg" alt="slide3 image">
           
            </div>
            <div class="carousel-item">
                <img src="4.jpg" alt="slide4 image">
               
            </div>
            <div class="carousel-item">
                <img src="5.jpg" alt="slide5 image">
               
            </div>
        </div>

        <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div> 
    <br>
    <div class="container">
        <div class="row">
            
            <center>   
                <img src="1.jpeg" alt="" style="height:500px;margin-top:3px"></center>
            
                <div class="row">
                <p class="contact_body">
            Reading is the basic way for humans to obtain, transmit, exchange and accumulate information and knowledge.
             As an essential skill for everyone to develop, reading is the driving force behind a productive, successful life, 
             and is an integral part of the educational system. But in the digital era of internet where technologies are growing with the blink of eyes, human race has left behind many traditional methods of doing things which includes reading books as well. Focus has human race has shifted to more to the digitally available products. This owes its own disadvantage too one of which is eyes strain problems. Even if there are people who still prefer the traditional method of reading but are not willing to spend chunks on it. 
<br>We brings you a solution where you can get books by paying minimal. Grab your favorites in your own price by bargaining 
with the sellers without the involvement of third party. Also the e-library provides free pdf access of the books 
to the students that can help them to read and learn from anywhere. <BR>Book Bazaar provides you simple and safe method to
 grab your favorite reads in easiest way. 
 <br>
 <b> 
 </b>     
            
        </div>
    </div>
<br>
        </br>
<!--display of books-->
<center><h3 class="contact_head" style="font-size: 40px;">Books you may Like</h3></center>

<?php
        $con = mysqli_connect("localhost","root","","practice");
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
       // echo"done";

      
       $displayquery1=" select * from imgupload WHERE category='novel' and id>20 Limit 3"; 
       $displayquery2=" select * from imgupload WHERE category='college' Limit 3"; 
       $querydisplay1= mysqli_query($con, $displayquery1 );
       $querydisplay2= mysqli_query($con, $displayquery2 );

       if($querydisplay1-> num_rows > 0)
       {?>
       
                   <div class="row">
                 
       <?php
       while ($result1 = mysqli_fetch_array($querydisplay1) ) 
       {?>
                                         
    <div class="col-lg-4 col-sm-6">  
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 350px;height: 520px;">
        <img src=" <?php echo $result1['image']; ?>">
        
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Title:</span><i><?php echo $result1["bookname"]  ?></i></h1>
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Author:</span><i><?php echo $result1["authorname"]  ?></i></h1>
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Edition:</span><i><?php echo $result1["edition"]  ?></i></h1>
    <!--button><a href="view_prod.php?id=<?php echo $result['id'];?>">View</a></button-->
    <div class="btn-group">
           <a style=" background-color: #007bff;
    border-color: #007bff;
  color: white;
  padding: 7px 56px;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="view_prod.php?id=<?php echo $result1['id'];?>">View</a>
               
                    <!--button id="myBtn" type="button" class="btn btn-primary">View</button-->

            <form action="manage_cart.php" method="POST"> 
                            <button type="submit" name="Add_to_cart" class="btn btn-success">Add to cart</button>
                            <input type="hidden" name="Item_Name" value= "<?php echo $result1["bookname"]?>">
                            <input type="hidden" name="Price" value="<?php echo $result1["price"]  ?>">
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
    
  }

   ?>  
<!--footer-->
<?php
if($querydisplay2-> num_rows > 0)
       {?>
       
                   <div class="row">
                 
       <?php
       while ($result2 = mysqli_fetch_array($querydisplay2) ) 
       {?>
                                         
    <div class="col-lg-4 col-sm-6">  
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 350px;height: 520px;">
        <img src=" <?php echo $result2['image']; ?>">
        
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Title:</span><i><?php echo $result2["bookname"]  ?></i></h1>
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Author:</span><i><?php echo $result2["authorname"]  ?></i></h1>
        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Edition:</span><i><?php echo $result2["edition"]  ?></i></h1>
    <!--button><a href="view_prod.php?id=<?php echo $result['id'];?>">View</a></button-->
    <div class="btn-group">
  <button type="button" class="btn btn-primary">View</button>
  
  <button type="button" class="btn btn-success">Add to cart</button>
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
   
  }

   ?>  
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

<style>
    section.col-md-6.col-md-offset-6 {
    margin-left: 25%;
}
    body{
      
      background-image:url("p (2).jpg");
      background-repeat: no-repeat, repeat;
  background-color: #cccccc;
  background-size: cover;
   
    }

   .registerform{
        background-color:steelblue;
        padding: 20px;
        color: white;
        letter-spacing: 1px;
        font-family: 'Karla', sans-serif;
        opacity:0.9;
    }
    .buttonform{
        border: none;
        font-size: 20px;
        margin: 2%;
    }
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: aqua;
}
.contact_head{
    font-family: 'Martel', serif;
    font-size: 50px;
    color: white;
}
</style>
</head>
<body>
<?php 
    include_once "navbar2.php";
    ?>
        <br>
<section class="container">
<section class="col-md-6 col-md-offset-6">
            
<form class="form-container was-validated registerform" action="donated.php" enctype="multipart/form-data" method="post">

    
                    <center>
                        <h1 class="contact_head">Sell your Book</h1> 
                     </center>   
                     
    <div class="form-group">
    <label class="control-label col-sm-2" for="username">Name</label>
    <input type="text" class="form-control" id="username" placeholder="Anuj Singh" name="username" pattern="[A -Za- z]{2,50}"  required>
    </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2" for="mobileno">Mobile</label>
        <input type="text" class="form-control" id="mobileno" placeholder="Enter 10 Digit Mobile Number" name="mobileno" pattern="[0-9]{10}" maxlength="10" required>
        </div>
            
    
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email"  required>
        </div>
       
            <div class="form-group">
            <label class="control-label col-sm-6" for="area">Enter Residental area</label>
            <input type="text" class="form-control" id="area" placeholder="Enter Residental area" name="area" pattern="[A- Za- z]{2,50}"  required>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="city">City</label>
            <input type="text" class="form-control" id="city" placeholder="Enter city name" name="city" pattern="[A -Za- z]{2,50}"  required>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="state">State</label>
            <input type="text" class="form-control" id="state" placeholder="Enter State name" name="state" pattern="[A -Za- z]{2,50}"  required>
            </div>

    <div class="form-group">
            <label class="control-label col-sm-2" for="pincode">Pincode</label>
            <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode" pattern="[0-9]{2,50}" required >
            </div>
            
            
            
            

        
            <div class="form-group">
            <label class="control-label col-sm-2" for="bookname">Book</label>
            <input type="text" class="form-control" id="bookname" placeholder="Enter Book Name" name="bookname" pattern="[A -Za -z]{2,50}"  required>
            </div>
            
            <div class="form-group">
            <label class="control-label col-sm-2" for="edition">Edition</label>
            <input type="text" class="form-control" id="edition" placeholder="Enter Edition" name="edition" required>
            </div>
 
        <div class="form-group">
        <label class="control-label col-sm-6" for="authorname">Author name</label>
        <input type="text" class="form-control" id="authorname" placeholder="Select Author Name" name="authorname" required>
        </div>   
        
           <div class="form-group">
            <label class="control-label col-sm-2" for="Publication">Publication</label>
            <input type="text" class="form-control" id="Publication" placeholder="Enter Publication name" name="Publication" pattern="[A- Za -z]{2,50}"  required>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="price">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" pattern="[0-9]{2,50}" required >
            </div>
        </div>
        
        <div class="form-inline">
            <label class="control-label p-2" for="category">Category</label>
            <select id="category" name="category" class="custom-select col-md-7">
                <option value="College">College level</option>
                <option value="School">School level</option>
                <option value="Novels">Novels</option>
                <option value="other">Others</option>
            </select>
        </div>
        
        <br><?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
     
<div class="form-group">
<label for="file"> Profile Pic: </label> <input type="file" name="file" id="file" class="form-control">
</div>

<center>
            <input type="submit" name="submit" class="btn btn-warning btn-block"></button>
            </center>
    </form>
        
    </section>
    </section>
    </section>

</body>

</html>
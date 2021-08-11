<?php 
    include_once "navbar2.php";
    ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BOOK BAZAAR</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

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
}
    
.navbar-brand {
    float: left;
    height: 50px;
    padding: 6px 23px;
    font-size: 18px;
    line-height: 20px;
}
/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>
  </head>

  <body>
     
    
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <?php
        $con = mysqli_connect("localhost","root","","practice");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
       // echo"done";

       $id=$_GET['id']; 
       $displayquery="select * from imgupload where id='$id'"; 
       $querydisplay= mysqli_query($con, $displayquery );
       $result1 = mysqli_fetch_array($querydisplay)
        ?>
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src=" <?php echo $result1['image']; ?>"></div>
                          <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                          <div class="tab-pane" id="pic-5"><img src=" <?php echo $result1['image']; ?>"></div>
                        </div>
                        
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">BOOK DETAIL</h3>
                        <h1 class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Title: </span><i><?php echo $result1["bookname"] ?></i></h1>
        <p class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Author: </span><i><?php echo $result1["authorname"]  ?></i>
        <p class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Edition: </span><i><?php echo $result1["edition"]  ?></i></p>
        <p class="contact_body" style="font-weight:bold;"><span style="opacity: 0.5;">Price: </span><i><?php echo $result1["price"] ?></i></p>
        
        <br>
        <br>
        <br>
 <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">5 reviews</span>
                        </div>
                           <div class="action">
                            <form action="manage_cart.php" method="POST"> 
                            <button type="submit" name="Add_to_cart" class="add-to-cart btn btn-default">Add to cart</button>
                            <input type="hidden" name="Item_Name" value= "<?php echo $result1["bookname"]?>">
                            <input type="hidden" name="Price" value="<?php echo $result1["price"]  ?>">
                            
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

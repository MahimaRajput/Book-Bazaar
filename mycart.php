<?php
include("navbar2.php");
?>
<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0">
        <title>CART</title>
    </head>
    <body>
       <div class="container">
           <div class="row">
               <div class="col-lg-12 text-center border rounded bg-light my-5">
                   <h1>MY CART</h1>
               </div>
               <div class="col-lg-9">
                        <table class="table table-striped">
                          <thead class="text-center">
    
                                    <tr>
                                        <th scope="col">Serial No.</th>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Item Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col"></th>
                                    </tr>
                            
                          </thead>
                          <tbody class="text-center">
                            <?php 
                            $total=0;
                              if(isset($_SESSION['cart']))
                              {
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        $sr=$key+1;
                                        $total=$total+$value['Price'];
                                        
                                        echo"
                                        <tr>
                                        <th>$sr</th>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]</td>
                                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                        <td>
                                         <form action='manage_cart.php' method='POST'>
                                            <button name= 'Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                            <input type= 'hidden' name='Item_Name' value='$value[Item_Name]'>
                                         </form>
                                        </td>
                                        </tr>
                                        ";
                                    }
                               }
                            ?>

                           </tbody>
                        </table>

                </div>
                <div class="col-lg-3">
                    <div class="border bg-light rounded p-4">
                    <h4 class="text-left">Total   :   <?php echo $total ?></h4>
                    <br>
                       <form>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Cash on Delivery
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Online Payment
                                </label>
                                </div>
                                
                            <br>
                           <button class="btn btn-primary btn-block">Make Payment</button>
                       </form>
                    </div>
                </div>
           </div>
           
        </div>

    </body>





</html>
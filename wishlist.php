<?php
require 'configure.php';
extract($_POST);
if(isset($_POST['add_to_wish']))
{
    $q=" insert into wishlist (pid, product_name, product_price, product_img, product_code) VALUES ('$pid','$pname','$pprice','$pimage','$pcode' )";
    $query =mysqli_query($conn,$q);
    header('location:wishlist.php');
    echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Success!</h4>
    </div>';
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Easy-Shopping</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wishlist.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Encode+Sans:wght@200;500&display=swap"
        rel="stylesheet">
</head>

<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="200px">
            </div>
            <div class="search">
                <input type="text" placeholder="Search Anything You Want">
            </div>
            <a href="" class="searching">
                <img src="images/search.png" width="45px" height="45px">
            </a>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="wishlist.php">Wishlist</a></li>
                </ul>
            </nav>
            <div class="cart">
                <a href="cart.php">
                <img src="images/cart.png" width="30px" height="30px" >
            </a>
            </div> 
        </div>
    </div>
             <!---------cart item details--------->
             <div  class="small-container1 cart-page" style="width:100%;">
                <table>
                    <tr>
                       <th></th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th><a href="wishlist.php?clear=all "class="fa fa-trash" onclike="return"> &nbsp; Remove</a></th>
                        <th></th>
                
                    </tr>
                   
                    <tbody>
                         <?php
                             require 'configure.php';
                             $stmt = $conn-> prepare("SELECT * FROM wishlist");
                             $stmt -> execute();
                             $result = $stmt ->get_result();
                             $Gtotal=0;
                            while($row =$result->fetch_assoc()):   
                             
                         ?>
                           <tr>
                               
                                <td></td>
                                <input type="hidden" class="pcode"  value="<?=$row['product_code']?>">
                                <td><img src="<?=$row['product_img']?>"> </td>

                                <td><?=$row['product_name']?></td>
                                <input type="hidden" class="pname"  value="<?=$row['product_name']?>">

                                <td><?=$row['product_price']?></td>
                                <input type="hidden" class="pprice"  value="<?=$row['product_price']?>">

                                <!--td ><input type="number" class ="iqty"value="<!?=$row['qty']?>"onchange='subtotal();'></td>                                 
                                <td class ="itotal" ><!?=$row['total_price']?></td-->

                                <td><a href="delete_wish.php?pcode=<?=$row['product_code']?>"><button  style ='color: red '>Remove</button></a></td>
                                <td></td>
                             
                            </tr>      
                
                            <?php endwhile;?>

                  </tbody>
                             
                </table>
             </div>
    
        




            <!-- --------footer-------- -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col1">
                        <img src="images/logo2.png">
                        <p>We provide the best online shopping sevices in the country, we aim to provide all people the
                            Easiest way of shopping in less price.</p>

                    </div>
                    <div class="footer-col2">
                        <h3>ABOUT</h3>
                        <ul>
                            <a href="footer/about.html">
                                <li>About Us</li>
                            </a></a>
                            <a href="footer/contact.html">
                                <li>Contact Us</li>
                            </a>
                            <a href="footer/FAQ.html">
                                <li>FAQs</li>
                            </a>
                        </ul>

                    </div>
                    <div class="footer-col3">
                        <h3>USEFUL LINKS</h3>
                        <ul>
                            <a href="">
                                <li>Coupons</li>
                            </a></a>
                            <a href="">
                                <li>Blog Post</li>
                            </a></a>
                            <a href="">
                                <li>Return Policy</li>
                            </a></a>
                            <a href="">
                                <li>Join Affiliate</li>
                            </a></a>
                        </ul>

                    </div>
                    <div class="footer-col4">
                        <h3>FOLLOW US</h3>
                        <ul>
                            <a href="">
                                <li>Facebook <i class="fa fa-facebook"></i></li>
                            </a>
                            <a href="">
                                <li>Instagram <i class="fa fa-instagram"></i></li>
                                <a href="">
                                    <li>Twitter <i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="">
                                    <li>Linkden <i class="fa fa-linkedin"></i></li>
                                </a>
                        </ul>

                    </div>
                </div>
                <hr>
                <p class="copy">© 2021 WWW.Easy-Shopping.com Pvt.Ltd.</p>
            </div>
        </div>

 <script>
     var pprice=document.getElementsByClassName('pprice');
     var iqty=document.getElementsByClassName('iqty');
     var itotal=document.getElementsByClassName('itotal');
     function subtotal()
     {
         for(i=0;i<iqty.length;i++)
         {
          itotal[i].innerText=(pprice[i].value)*(iqty[i].value);
          gt=gt+(pprice[i].value)*(iqty[i].value);;
         }
    
         Gtotal.innertext=gt;
     }
     subtotal();
</script>
</html>

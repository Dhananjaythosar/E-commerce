<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | Easy-Shopping</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Encode+Sans:wght@200;500&display=swap" rel="stylesheet">
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
    <div class="small-container">
        <div  id= "message"></div>
        <div id="message"> </div>
    <div class="row row2">
                <h2 class="title">All Products</h2>
        <div class="row">
            <?php
            require 'configure.php';
            $stmt = $conn-> prepare("SELECT * FROM product4");
            $stmt -> execute();
            $result = $stmt ->get_result();
            while($row =$result->fetch_assoc()):     
            ?>
        <div class="col-4">
        <img src="<?=$row['product_img']?>" class="card-img-top" height="250"> 
         <div class="panel">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-search"></a>
                    </div>
                    <form  id ="addcart"action="cart.php" class="form-submit" method="POST">
                     <input type="hidden" name="pid" value="<?=$row['id']?>">
                     <input type="hidden" name="pname" value="<?=$row['product_name']?>">
                     <input type="hidden" name="pprice" value="<?=$row['product_price']?>">
                     <input type="hidden" name="pimage" value="<?=$row['product_img']?>">
                     <input type="hidden" name="pcode" value="<?=$row['product_code']?>">
                     <a href="#"><button type="submit " id="add_to_cart" name="add_to_cart">add to cart</button></a>
                    </form>
                    <div class="info"></div>
                    <h4><?=$row['product_name']?></h4>
                    <p>₹<?=$row['product_price']?></p>
                    <?php
                    $x= $row['rt'];
                    $y= 5-$x;
                    while($x!=0)
                    {
                        echo " <i  style ='color:  #ff523b'class='fa fa-star'></i> ";
                        $x--;

                    }
                    while($y!=0)
                    {
                        echo " <i  style ='color:  #ff523b'class='fa fa-star-o'></i> ";
                         $y--;

                    }
                    ?>
                    
                
                  
                </div>


        <?php endwhile;?>
        <div class="page-btn">
            <a href="product.php"><span>1</span></a>
            <a href="product2.php"><span>2</span></a>
            <a href="product3.php"><span>3</span></a>
            <a href="product4.php"><span>4</span></a>
            <span> &#8594;</span>
        </div>

        </div>
    </div>
    
     <!-- --------footer-------- -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
                <img src="images/logo2.png" >
                <p>We provide the best online shopping sevices in the country, we aim to provide all people the Easiest way of shopping in less price.</p>

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
                    <a href=""><li>Coupons</li></a></a>
                    <a href=""><li>Blog Post</li></a></a>
                    <a href=""><li>Return Policy</li></a></a>
                    <a href=""><li>Join Affiliate</li></a></a>
                </ul>

            </div>
            <div class="footer-col4">
                <h3>FOLLOW US</h3>
                <ul>
                    <a href=""><li>Facebook <i class="fa fa-facebook"></i></li></a>
                    <a href=""><li>Instagram <i class="fa fa-instagram"></i></li>
                    <a href=""><li>Twitter <i class="fa fa-twitter"></i></li></a>
                    <a href=""><li>Linkden <i class="fa fa-linkedin"></i></li></a>
                </ul>

            </div>
        </div>
        <hr>
        <p class="copy">© 2021 WWW.Easy-Shopping.com Pvt.Ltd.</p>
    </div>
</div>
<script type="text/javascript">
    $(document ).ready(function(){

        var form = $('#addcart');
        $('#add_to_car').clike(function({
            $.ajax({
                url:form.attr("action"),
                type:'POST',
                data$("#addcart  input").serialize(),
                success: function(data){
                    consol.log(date);
                    $"(#message").html(response){

                    }
                }
            });

        }));
    });
</script>
</html>

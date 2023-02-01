<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | Easy-Shopping</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Encode+Sans:wght@200;500&display=swap"
        rel="stylesheet">

</head>
<style>
    .frequent {
        margin: 0;
        padding: 0;
        font-family: 'Hind', sans-serif;
        background: #fff;
        color: #4d5974;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .container1 {
        margin: 5px auto;
        padding: 4rem;
        width: 100%;
        background: radial-gradient(#fff, #ffd6d6);
    }

    h1 {
        color: red;
        text-shadow: 2px 2px 4px rgb(151, 10, 151);
    }

    px double h3 {
        font-size: 1.75rem;
        color: #373d51;
        padding: 1.3rem;
        margin: 0;
    }

    .accordion a {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        padding: 1rem 3rem 1rem 1rem;
        color: #0e000a;
        font-size: 1.15rem;
        font-weight: 400;
        border-bottom: 1px solid #e5e5e5;
    }

    .accordion a:hover,
    .accordion a:hover::after {
        cursor: pointer;
        color: #ff5353;
    }

    .accordion a:hover::after {
        border: 1px solid #ff5353;
    }

    .accordion a.active {
        color: #ff5353;
        border-bottom: 1px solid #ff5353;
    }

    .accordion a::after {
        font-family: 'Ionicons';
        content: '\f218';
        position: absolute;
        float: right;
        right: 1rem;
        font-size: 1rem;
        color: #85c5d4;
        padding: 5px;
        width: 30px;
        height: 30px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 1px solid #080808;
        text-align: center;
    }

    .accordion a.active::after {
        font-family: 'Ionicons';
        content: '\f209';
        color: #ff5353;
        border: 1px solid #ff5353;
    }

    .accordion .content {
        opacity: 0;
        padding: 0 1rem;
        max-height: 0;
        border-bottom: 1px solid #e5e5e5;
        overflow: hidden;
        clear: both;
        -webkit-transition: all 0.2s ease 0.15s;
        -o-transition: all 0.2s ease 0.15s;
        transition: all 0.2s ease 0.15s;
    }

    .accordion .content p {
        font-size: 1rem;
        font-weight: 300;
    }

    .accordion .content.active {
        opacity: 1;
        padding: 1rem;
        max-height: 100%;
        -webkit-transition: all 0.35s ease 0.15s;
        -o-transition: all 0.35s ease 0.15s;
        transition: all 0.35s ease 0.15s;
    }
</style>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../images/logo.png" width="200px">
                </div>
                <div class="search">
                    <input type="text" placeholder="Search Anything You Want">
                </div>
                <a href="" class="searching">
                    <img src="../images/search.png" width="45px" height="45px">
                </a>
                <nav>
                    <ul>
                        <li><a href="../home.php">Home</a></li>
                        <li><a href="../product.html">Products</a></li>
                        <li><a href="../profile.php">Profile</a></li>
                        <li><a href="">Wishlist</a></li>
                    </ul>
                </nav>
                <div class="cart">
                    <a href="cart.html">
                        <img src="../images/cart.png" width="30px" height="30px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="frequent">
        <div class="container1">

            <h1 style="text-align: center;">Frequently Asked Questions</h2>

                <div class="accordion">
                    <div class="accordion-item">
                        <a> What kind of customer service do you offer?</a>
                        <div class="content">
                            <p> Our ecommerce consultants are here to answer your questions.
                                In addition to FREE phone support, you can contact our consultants via email or live
                                chat.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> What are the shipping costs?</a>
                        <div class="content">
                            <p>Extra charges based on the items in your cart and the delivery address.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> What is your return policy</a>
                        <div class="content">
                            <p>You can return the product within 10 days of delivary for full
                                refund.Please keep
                                the item in its original condition,with outer box.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> Are my payment details /data secure?</a>
                        <div class="content">
                            <p>We provied you with a convenient methon of payment and is is the only
                                authorised and recognised</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> When will I get refund?</a>
                        <div class="content">
                            <p>After item recived by Easy-Shopping or the seller notifies us of the recipt
                                of the return</p>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script src="../js/faq2.js"></script>


    <!-- --------footer-------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <img src="../images/logo2.png">
                    <p>We provide the best online shopping sevices in the country, we aim to provide all people
                        the
                        Easiest way of shopping in less price.</p>

                </div>
                <div class="footer-col2">
                    <h3>ABOUT</h3>
                    <ul>
                        <a href="about.php">
                            <li>About Us</li>
                        </a></a>
                        <a href="contact.php">
                            <li>Contact Us</li>
                        </a>
                        <a href="FAQ.php">
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
</body>


</html>
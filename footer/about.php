<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs | Easy-Shopping</title>
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
    h1 {
        font-size: 40px;
        margin-top: 20px;
        color: #e74c3c;
        text-align: center;

    }

    .team {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card {
        height: 5oopx;
        width: 290px;
        margin: 20px;
        box-shadow: 0 3px 5px #000;
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
    }

    .card .bg-img img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        clip-path: polygon(0 0, 100% 0%, 100% 70%, 45% 100%, 0 70%);

    }

    .card .pic img {
        height: 120px;
        width: 120px;
        border-radius: 50%;
        border: 5px solid #222;
        margin-top: -90px;
        position: relative;
    }

    .card .info h3 {
        font-size: 20px;
        padding: 10px 0;
    }

    .card .info span {
        font-size: 15px;
        color: #e74c3c;

    }

    .card .info p {
        font-size: 13px;
        padding: 10px 20px;
        color: #4b4e74;
    }

    .card .info .icons a {
        font-size: 20px;
        text-decoration: none;
        color: #e74c3c;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 0 5px;
    }

    .card .info .icons a:hover {
        color: black;
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
                    <a href="../cart.html">
                        <img src="../images/cart.png" width="30px" height="30px">
                    </a>
                </div>
            </div>
        </div>
        <h1>Our Team Section</h1>
        <section class="team">
            <div class="card">
                <div class="bg-img">

                    <img src="https://image.freepik.com/free-vector/abstract-low-poly-orange-yellow-background_1017-32111.jpg" alt="">
                </div>

                <div class="pic">
                    <img src="data:image/jpeg;base64,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" alt="">
                </div>
                <div class="info">
                    <h3>Sakshi Kad</h3>
                    <span><i class="fa fa-code"></i> Web Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta atque quod! Nesciunt iste
                        incidunt officia, exercitationem fugiat dicta non, fugit dolor voluptatem similique dolorum
                        vitae id. Adipisci, nulla laborum!</p>
                    <div class="icons">
                        <a href="" class="fa fa-facebook"></a>
                        <a href="https://instagram.com/sakshi_kad_25?utm_medium=copy_link" class="fa fa-instagram"></a>
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-img">

                    <img src="https://image.freepik.com/free-vector/abstract-low-poly-orange-yellow-background_1017-32111.jpg" alt="">
                </div>

                <div class="pic">
                    <img src="../images/spy.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Dhananjay Thosar</h3>
                    <span><i class="fa fa-code"></i> Web Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta atque quod! Nesciunt iste
                        incidunt officia, exercitationem fugiat dicta non, fugit dolor voluptatem similique dolorum
                        vitae id. Adipisci, nulla laborum!</p>
                    <div class="icons">
                        <a href="" class="fa fa-facebook"></a>
                        <a href="https://instagram.com/i_am_dj_dhananjay?utm_medium=copy_link" class="fa fa-instagram"></a>
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-img">

                    <img src="https://image.freepik.com/free-vector/abstract-low-poly-orange-yellow-background_1017-32111.jpg" alt="">
                </div>

                <div class="pic">
                    <img src="../images/spy.jpg" alt="">
                </div>
                <div class="info">
                    <h3>Mohini Jagtap</h3>
                    <span><i class="fa fa-code"></i> Web Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta atque quod! Nesciunt iste
                        incidunt officia, exercitationem fugiat dicta non, fugit dolor voluptatem similique dolorum
                        vitae id. Adipisci, nulla laborum!</p>
                    <div class="icons">
                        <a href="" class="fa fa-facebook"></a>
                        <a href="https://instagram.com/___mohiniii___?utm_medium=copy_link" class="fa fa-instagram"></a>
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- --------footer-------- -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col1">
                        <img src="../images/logo2.png">
                        <p>We provide the best online shopping sevices in the country, we aim to provide all people the
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
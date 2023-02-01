<?php session_start(); 

if(!isset($_SESSION['id'])) {
    header('Location: login.html');
}
?>
<?php
include("../connection.php");

if(isset($_POST['submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $subject=mysqli_real_escape_string($mysqli, $_POST['subject']);
    $problem=mysqli_real_escape_string($mysqli, $_POST['problem']);

    if(!isset($errorMsg)){
        $sql = " INSERT INTO contact(name, phone, email, subject, problem) VALUES ('$name', '$phone', '$email', '$subject', '$problem' )";
        $result = mysqli_query($mysqli, $sql);
        if($result){
         echo "<script type='text/javascript'>alert('Request Sent Successfully, Thank You!!!'); document.location = '../home.html'; </script>";
            
        }else{
            $errorMsg = 'Error '.mysqli_error($mysqli);
        }
    }     
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs | Easy-Shopping</title>
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
    .contact-box {
        background-color: white;
        display: flex;
        border: 1px solid black;
        margin-bottom: 50px;
    }

    .contact-left {
        flex-basis: 60%;
        padding: 40px 60px;
    }

    .contact-right {
        flex-basis: 40%;
        padding: 40px;
        background: linear-gradient(to right, #FF4B2B, #FF416C);
        color: white;
    }

    .input-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .input-row .input-grp {
        flex-basis: 45%;
    }

    input {
        width: 100%;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        padding-bottom: 5px;
    }

    textarea {
        width: 100%;
        border: 1px solid #ccc;
        outline: none;
        padding-bottom: 10px;
        box-sizing: border-box;

    }

    label {
        margin-bottom: 6px;
        display: block;
        color: #ff0000;
    }

    button {
        outline: none;
        width: 100px;
        border: none;
        background-color: #ff0000;
        color: white;
        box-shadow: 0px 5px 15px rgba(28, 0, 181, 0.3);
        height: 35px;
        border-radius: 30px;
        margin-top: 20px;
        cursor: pointer;
    }

    button:hover {
        background-color: #000;
        color: white;
    }

    .contact-left h3 {
        color: #ff0000de;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .contact-right h3 {
        /* color: #1c00b5; */
        font-weight: 600;
        margin-bottom: 30px;
    }

    tr td:first-child {
        padding-right: 20px;
    }

    tr td {
        padding-top: 20px;
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
            <br>
            <h1 style="padding-top: 50px;">Connect With Us</h1>
            <p>We would love to respond to your queries and help you succeed.<br>Feel free to contact us</p>
            <br>
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Send Your Request</h3>
                    <form method="POST" action="">
                        <?php

                          $sql= " SELECT * FROM admin_users WHERE id ='{$_SESSION['id']}'";
                          $result = mysqli_query($mysqli,$sql);
                          if(mysqli_num_rows($result)>0){
                          while($row=mysqli_fetch_assoc($result)){
                    
                    ?>
                        <div class="input-row">
                            <div class="input-grp">
                                <label for="">User Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row['username'];?>">
                            </div>
                            <div class="input-grp">
                                <label for="">Phone no</label>
                                <input type="text"  name="phone" placeholder="Enetr Your Phone no" value="<?php echo $row['mobile1'];?>" >
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-grp">
                                <label for="">Email Id</label>
                                <input type="email" name="email" placeholder="Enter Your Active Email Address" value="<?php echo $row['email'];?>">
                            </div>
                            <div class="input-grp">
                                <label for="">Subject</label>
                                <input type="text" name="subject" placeholder="Your Query Pls">
                            </div>
                        </div>
                        <label for="">Your Problem</label>
                        <textarea name="problem" id="" rows="5"></textarea>
						<?php
                    }
                }
                    ?>

                        <button type="submit" value="submit" name="submit">SUMBIT</button>
                    </form>

                </div>
                <div class="contact-right">
                    <h3>Reach Us</h3>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>ShopEasy@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone No</td>
                            <td>+91 9065436713</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>SCTR'S Pune Institute of Computer Technology, Survey No. 27, Near, Trimurti Chowk,
                                Bharati Vidyapeeth Campus, Dhankawadi, Pune, Maharashtra 411043</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


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
<!-- <?php
// session_start();?> -->
<?php
include("connection.php");

mysqli_select_db($mysqli,'session');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$s = "SELECT * FROM admin_users where username = '$username'";
$result = mysqli_query($mysqli, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<script type='text/javascript'>alert('username already taken'); document.location = 'login.html'; </script>";}
else{
	$reg= " INSERT INTO admin_users(username ,email, password ) VALUES ('$username' , '$email' ,'$password' )";
	mysqli_query($mysqli, $reg);	
	echo "<script type='text/javascript'>alert('Registration Successfull, Please login to continue'); document.location = 'login.html'; </script>";
}
?>

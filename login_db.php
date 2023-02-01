<?php session_start(); ?>
<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($username == "" || $password == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.html'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM admin_users WHERE username='$username' AND password='$password'")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
		} else {
        	echo "<script type='text/javascript'>alert('Username OR password invalid'); document.location = 'login.html';</script>";
		}
		if(isset($_SESSION['valid'])) {
		    echo "<script type='text/javascript'>alert('Login Successful'); document.location = 'home.php'; </script>";
		
		}
	}
} 
?>
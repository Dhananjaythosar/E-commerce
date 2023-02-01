<?php
 require 'configure.php';
 error_reporting(0);
 $pcode=$_GET['pcode'];
 $query="DELETE FROM cart where product_code='$pcode'";
 $data=mysqli_query($conn,$query);
 if($data)
 {
    
    echo"<script>
                alert('product removed');
                </script>";
                header('location:cart.php');
 
 }
 else
 {
             echo"<script>
                alert('failed to  removed  try again');
                </script>";
                header('location:cart.php');
 }
?>
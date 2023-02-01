<?php
  if(isset($_POST["iqty"]))
  {
      $qty=$_POST['qty'];
      $pcode=$_POST['pcode'];
      $pprice=$_POST['pprice'];

      $tprice=$qty*$pprice;
      
      $stmt=$conn->prepare("UPDATE cart SET qty=?,total_price=? WHERE product_code= $pcode");
      $stmt->('iis',$qty ,$pprice, $pprice);
      $stmt->execute();
 if($stmt->error)
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
  }
  $stmt->close();
?>
<?php
  if(isset($_POST["iqty"]))
  {
      $qty=$_POST['qty'];
      $pcode=$_POST['pcode'];
      $pprice=$_POST['pprice'];

      // $tprice=$qty*$pprice;
      
      $stmt=$conn->prepare("UPDATE wishlist SET product_price=? WHERE product_code= $pcode");
      $stmt->('iis' ,$pprice);
      $stmt->execute();
 if($stmt->error)
 {
    
    echo"<script>
                alert('product removed');
                </script>";
                header('location:wishlist.php');
 
 }
 else
 {
             echo"<script>
                alert('failed to  removed  try again');
                </script>";
                header('location:wishlist.php');
 }
  }
  $stmt->close();
?>
<?php/*
$server= "localhost";
$username="root";
$password=" ";
$dbname= "ecom";
$conn =new mysqli($server,$username,$password,$dbname);
if(isset($_POST['add_to_cart'])){
    if(!empty($_POST['pname']))
    {
       $name =$_POST['pname'];
       $query= "INSERT INTO `cart`( `product_name`) VALUES ($name)";
       $run=mysqli_query($conn,$query)or(mysqli_error());
       if($run)
       {
        echo "form not  submitted";;
       }
       else {
        echo "form not  submitted";
    }

    }
    

}
else {
    echo "fill";
}*/
?>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["add_to_cart"]))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems= array_column($_SESSION['cart'],'pname');
            if(in_array($_POST['pname'],$myitems))
            {
                echo"<script>
                alert('item already added');
                </script>";
 
            }
            else
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('pname'=>$_POST["pname"],'pprice'=>$_POST["pprice"], 'image'=>$_POST["pimage"],'quantity'=>1); 
            
            }
            

        }
        else 
        {
            $_SESSION['cart'][0] = array('name'=>$_POST["pname"],'price'=>$_POST["pprice"], 'image'=>$_POST["pimage"],'quantity'=>1);
            echo "<script type='text/javascript'>alert('Item added'); </script>";
        }

    }
}
?>
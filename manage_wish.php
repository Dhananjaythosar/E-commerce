<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["add_to_wish"]))
    {
        if(isset($_SESSION['wishlist']))
        {
            $myitems= array_column($_SESSION['wishlist'],'pname');
            if(in_array($_POST['pname'],$myitems))
            {
                echo"<script>
                alert('item already added');
                </script>";
 
            }
            else
            {
            $count=count($_SESSION['wishlist']);
            $_SESSION['wishlist'][$count] = array('pname'=>$_POST["pname"],'pprice'=>$_POST["pprice"], 'image'=>$_POST["pimage"],'quantity'=>1); 
            
            }
            

        }
        else 
        {
            $_SESSION['wishlist'][0] = array('name'=>$_POST["pname"],'price'=>$_POST["pprice"], 'image'=>$_POST["pimage"],'quantity'=>1);
            echo "<script> alert('item  added'); </script>";
        }

    }
}
?>
<?php
 if (isset($_POST["submit"])){
    $status=$_POST["status"];
    $id=$_POST["id"];



    if(!empty($status)){

        $link=mysqli_connect('localhost','root','@Dimple123','login');
        if($link==false){
            die(mysqli_connect_error());
        }

        $sql="update travel_data set status='$status' where id='$id'";

        if(mysqli_query($link,$sql)){
            header('Location:http://localhost/phpmailer/admin.php');
        }
        else{
            echo "Something went wrong";
        }
        }   
        else{
            
            echo "Please prove the user details!!!";
        }
}
  
 ?>



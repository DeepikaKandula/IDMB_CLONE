<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clone"; // Replace Database name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        echo "Error found with connection";
    }
    if(isset($_POST['submit'])){
         $email=$_POST['email'];
         $password=$_POST['password'];

        
         $authenticate="select * from signin where email='".$email."' and password='".$password."'";
         $executeauthenticate = mysqli_query($conn,$authenticate);

         $count=0;
         while($row = mysqli_fetch_assoc($executeauthenticate))
         {
            $count++;
         }
         if($count==1)
            {
                session_start();
                $_SESSION['mail']=$email;
                header('location:../index.php');
            }
        else{
            echo "enter correct email or password";
            //header('location:../login.php');
            }
    }
    else{
        echo "please go back to login form";
    }
?>
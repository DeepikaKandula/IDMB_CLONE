<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .bg-light-dark {
            background-color: rgb(250, 250, 250) !important;
            margin-top: 20vh !important;
            width: 80vw;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="m-5 p-5 bg-light-dark d-block m-auto">
        <h3>
            <?php
                // Insert PHP Code here
                //within the code for every connection or for new table we should change the dbname dbname is the table name which we create
                $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        echo "mysql_error($conn)";
        die();
    }
    if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $fullName=$_POST['fullName'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

    $insertData="INSERT into profile values ('$username','$email','$fullName','$gender','$password')";
    $executed_insertedData=mysqli_query($conn,$insertData);
    if($executed_insertedData){
        echo "data inserted";
    }
    else{
        echo "data not inserted";
    }}
    else{
        echo "please reload the form";
    }
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $fullName;
    // echo "<br>";
    // echo $gender;
    // echo "<br>";
    // echo $password;
    // echo "<br>";

    
                /*to create a database after opening phpmyadmin we should click on new option then give table name and 
                click create and then give no.of values and click ok and then*/ 
            ?>
        </h3>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
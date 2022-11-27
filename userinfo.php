<?php

$con = mysqli_connect('localhost:3307','root'); //Keep this in mind. I have used localhost:3307, and will keep using this, instead of localhost, beacuse my SQL uses port 3307 and not 3306 (3306 is default)

if($con){
    echo"Connection Successful";
}else{
    echo"No connection";
}

mysqli_select_db($con, 'trainer_website');

$user = $_POST['user']; 
$email = $_POST['email'];
$phno = $_POST['number'];
$comment = $_POST['Comment'];

$query = " INSERT INTO userinfodata(user, email, number, comment) 
            VALUES ('$user','$email','$phno','$comment') ";

mysqli_query($con, $query);

echo"$query";

header('location:localhost:index.php');

?>
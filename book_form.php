<?php

$connection = mysqli_connect('localhost', 'root', '');

if(!$connection){
    die("Could not connect to".mysqli_connect_error());
}
$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $guests = $_POST['guests'];
    $location = $_POST['location'];
    $arrival = $_POST['arrivals'];
    $departure = $_POST['departure'];

    $request = "insert into `booking`.`travel`(`name`,`email`,`phone`,`address`,`location`,`guests`,`arrivals`,`leaving`) values 
    ('$name','$email','$phone','$address','$location','$guests','$arrival','$departure')";

    if ($connection->query($request) == true){
        header("Location: home.php");
        die;
    }
    else {
        echo "Error";
    }
?>
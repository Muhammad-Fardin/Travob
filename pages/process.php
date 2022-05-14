<?php 

$mysqli = new mysqli("localhost", "root", "", "travo");

     // if ($mysqli -> connect_errno) {
     //      echo "failed to connect to mysql:" . $mysqli -> connect_error;
     //      exit();
     // }
     // else {echo "connected successfully";}

     error_reporting(0);


     $name = $_POST['name'];
     $email = $_POST['email'];
     $number  = $_POST['phone'];
     $address = $_POST['address'];
     $location = $_POST['location'];
     $guest = $_POST['guests'];
     $arrival = $_POST['arrival'];
     $leaving = $_POST['leaving'];

     $request = "INSERT INTO `booking`(`id`, `name`, `email`, `phone`, `address`, `location`, `guest`, `arrival`, `leaving`) VALUES ('NULL','$name','$email','$phone','$address','$location','$guest','$arrival','$leaving')";

     mysqli_query($mysqli, $request);

     // header('location:../pages/booking.php');


if($mysqli -> query($request) === TRUE) {echo "Congratulations You have successfully booked your trip";}
else{echo "Something went wrong"; }


?>


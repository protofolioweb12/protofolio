<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formdata";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
	die("connection failed" . mysqli_connect_error());
}
else{
	// alert("thanku for contact me ");
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$insertquery = "INSERT INTO data (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
		mysqli_query($conn, $insertquery);
		header('Location: index.html');
        exit; // Make sure to exit after redirection 

}
   

?>
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="personalportfolio";
$con=mysqli_connect ($server_name, $username, $password, $database_name);

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}


if(isset($_POST['submit']))
{

$user = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into infodata (name, email, subject, message)
values ('$user', '$email', '$subject', '$message') ";
if (mysqli_query($con, $query) )
		{
			echo 'Thanks for the feedback';
		}
		else
		{
			echo "Error:"."".mysqli_error($con);
		}
		mysqli_close($con);
}

?>
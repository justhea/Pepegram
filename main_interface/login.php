<?php
//connect with database
include('functions/dbcon.php');
//fetch data from database named user and pass
$username = $_POST['username'];
$password = $_POST['password'];
//check if inputs matched with the data in the database
$query = $conn->query("select * from members where username = '$username' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
//if user id is >1 will redirect to the main page
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
 header('location:home.php'); 
}
//if not then redirect to the same page
else{
 header('location:index.php'); 
}
?>
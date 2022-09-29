<!--Function for delete-->
<?php
include('functions/dbcon.php');
$get_id = $_GET['id'];
$conn->query("delete from post where post_id='$get_id'");
header('location:home.php'); //redirect back to home page after post is deleted
?>
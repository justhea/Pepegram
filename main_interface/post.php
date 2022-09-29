<!--post algo-->
<?php
include('functions/dbcon.php');//connect to db
include('session.php');//which user is using
$content = $_POST['content'];	//connect to post row
$conn->query("insert into post (content,date_posted,member_id) values('$content',NOW(),'$session_id')");//user share then store in to db
header('location:home.php');
?>
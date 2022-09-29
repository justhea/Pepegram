<?php include('index_header.php'); ?>
<body>
<?php
//connect to db
include('functions/dbcon.php');
//declare variables that will be needed or data that will be stored on
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$conn->query("insert into members (username,password,firstname,lastname,gender,image) values ('$username','$password','$firstname','$lastname','$gender','images/none.gif')");	//default gif if user signed in
?>
<script>
	alert('Success! Welcome to PepeGram');
	window.location = 'index.php';
</script>
</body>
</html>
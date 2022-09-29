<?php
//connect again to db
include('functions/dbcon.php');
//show what data will be changed
$member_id = $_POST['member_id'];
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$mobile = $_POST['mobile'];
$status = $_POST['status'];
$work = $_POST['work'];
$religion = $_POST['religion'];
//update if user pressed save
$conn->query("update members set username = '$username',firstname = '$firstname',lastname='$lastname',gender='$gender',address='$address',
birthdate='$birthdate',mobile='$mobile',status='$status',work='$work',religion='$religion' where member_id = '$member_id'
");

?>
<!--Notifies user after successfully editing data-->
<script>
		alert('Edit Successful!');
	window.location = 'profile.php<?php echo '?id='.$member_id; ?>';
</script>
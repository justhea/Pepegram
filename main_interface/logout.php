<!--search on how to redirect to parent directory-->
<?php
session_start();
session_destroy();
header('location: ../index.php');
?>
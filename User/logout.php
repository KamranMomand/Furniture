
<?php
session_start();
unset ($_SESSION['user_name']);
unset ($_SESSION['user_id']); 
header('location:index.php');
exit();
?>


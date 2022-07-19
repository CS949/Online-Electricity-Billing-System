<?php
 session_start();
unset($_SESSION['id']);
 header('Location:index.php');

unset($_SESSION['admin']);
 header('Location:index.php');
 
?>
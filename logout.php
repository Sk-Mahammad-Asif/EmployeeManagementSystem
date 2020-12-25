<?php
  
session_start();
session_destroy();

header('location:Emp_login.php');

?>
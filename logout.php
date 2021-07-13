<!-- ANISA NURFADILA DWI KARINA
20190140072
PKW C -->
<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['login']);
session_destroy();
header("Location:index.php");
?>
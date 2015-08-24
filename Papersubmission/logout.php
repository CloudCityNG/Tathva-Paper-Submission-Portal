<?php
session_start();
ob_start();
echo "hello";
if(!isset($_SESSION['Username']))
    header("Location: login.php");
else
{
session_destroy();
header("Location: login.php");
}
?>
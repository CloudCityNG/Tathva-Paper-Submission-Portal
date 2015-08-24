<?php
session_start();
ob_start();
if(!isset($_SESSION['Memberid']))
header("Location: ivalid.php");
?>
<html>
<body bgcolor="grey">

</body>
</html>

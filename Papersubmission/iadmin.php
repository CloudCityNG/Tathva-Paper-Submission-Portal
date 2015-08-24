<?php 
session_start();
ob_start();
if(!isset($_SESSION['Username']))
{ 
       //echo "hello";
       header("Location: login.php");
}

    //echo '<IFRAME NAME="menu" width="22%" height="780" SRC="validator_page.php" frameborder=0></IFRAME><IFRAME NAME="Viewer" width="57%" height="780" SRC="viewer.php" frameborder=0></IFRAME>';*/
?>

<html>
<head>

</head>
    <body>
    <form name=fm>
        <IFRAME name="menu" src="admin_page.php" width="51%" height="780"></IFRAME><IFRAME name="Viewer" src="viewer.php" width="48%" height="780"></IFRAME>
        <br>
        
    </form>
    <p>
    <button onclick="test()">logout</button></p>
    <script>
    function test()
    {
       
        window.location.href="logout.php";       
        
     }
</script>
    </body>
</html>
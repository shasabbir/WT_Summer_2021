<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>All Products</h2>


<?php 
include ("../control/allcheck.php");
?>

<br/>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   



<?php
session_start(); 




if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>
<?php 
$pimage=$pcategory=$pdesc=$pname="";
$pprice=0;
$found=0;
//$connection = new db();
//$conobj=$connection->OpenCon();
        
?>

<!DOCTYPE html>
<html>
<body>
<h2>Add New Product</h2>


<form action="" method="post">
Product Name: 
<input type="text" name="pname"><br><br>
<br>
<br>
<input type="submit" name="search" value="search PRODUCT">
</form>
<?php 
include ("../control/searchproductcheck.php");
if($found!=0){
echo "<br>Name: ".$pname."<br>Description: ".$pdesc."<br>Catagory: ".$pcategory."<br>Price: ".$pprice;
echo '<br><img src="'.$pimage.'"width="200" height="180"><br><br><br>';
}
 ?>
<h5> <a href="pageone.php">GO back</a></h5>
</body>
</html>
<?php
session_start(); 

//include('../control/search.php');
include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br><br>
<?php
$user=$radio1=$radio2=$radio3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);
$userQuery1=$connection->CheckUser1($conobj,"student",$_POST["usernames"]);

$userQuery2=$connection->searchUser($conobj,"student",$_POST["usernames"]);
if ($userQuery->num_rows!=null) {
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $user=$row["username"];
     //echo "IN WHILE 1";
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}}
 if ($userQuery1->num_rows!=null) {
 if ($userQuery1->num_rows > 0) {

    // output data of each row
    while($row = $userQuery1->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $user=$row["username"];
     //echo "IN WHILE 2";
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}}




?>
<form action='' method='post'>
Search by username : <input type='text' name='usernames' value="" >


     <input name='update' type='submit' value='seach'> </form>
<br><br>Your Profile Page.
<br><br>
<form action='' method='post'>
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >

<input type='text' name='username' value="<?php echo $user; ?>" >
email : <input type='text' name='email' value="<?php echo $email; ?>" >
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>
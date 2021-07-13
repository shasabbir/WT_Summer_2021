<?php
include('../model/db.php');

$error="";

if(isset($_POST['search']))
{
    if (empty($_POST['pname'])) 
    {
        $error = "input given is invalid";
    }
    else
        {

        $connection = new db();
        $conobj=$connection->OpenCon();
        
        $userQuery=$connection->searchProduct($conobj,"product",$_POST['pname']);
        //return $userQuery;
        if ($userQuery->num_rows > 0) {

    while($row = $userQuery->fetch_assoc()) {
      $pname=$row["P_Name"];
      $pdesc=$row["P_Desc"];
      $pcategory=$row["P_Category"];
      $pprice=$row["P_Price"];
      $pimage=$row["P_Picture"];
      $found=1;
      
   
  }
}
else{
    echo "connect error: ".$conobj->error;
}
        
        $connection->CloseCon($conobj);
        
        }


}
?>
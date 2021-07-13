<?php
include('../model/db.php');

$error="";

    
 

        $connection = new db();
        $conobj=$connection->OpenCon();
        
        $userQuery=$connection->allProduct($conobj,"product");
        //return $userQuery;
        if ($userQuery->num_rows > 0) {

    while($row = $userQuery->fetch_assoc()) {
      echo "<br>Name: ".$row["P_Name"]."<br>Description: ".$row["P_Desc"]."<br>Catagory: ".$row["P_Category"]."<br>Price: ".$row["P_Price"];
      echo '<br><img src="'.$row["P_Picture"].'"width="200" height="180"><br><br><br>';
      //$found=1;
      
   
  }
}
        
        $connection->CloseCon($conobj);
        




?>
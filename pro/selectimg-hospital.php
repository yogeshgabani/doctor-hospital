<?php
    
    $con=new MySQLi("localhost","root","","std");
    
    $qu = "select * from hospital";
    
    $rows = $con->query($qu);
    
    while($row = $rows->fetch_assoc())
          {
          $pp[] = $row;
          
          }
    
   // $emp_name=$_REQUEST["emp_name"];
    //$emp_add=$_REQUEST["emp_add"];
    //$emp_mob=$_REQUEST["emp_mob"];
    //$username=$_REQUEST["username"];
  //  $password=$_REQUEST["password"];
    
    
    //echo $qu="insert into tblemp1(emp_name,emp_add,emp_mob) values('$emp_name','$emp_add','$emp_mob')";
    
   // $con->query($qu);
    
    echo json_encode($pp);
    
?>

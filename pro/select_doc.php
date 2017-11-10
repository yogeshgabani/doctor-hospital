<?php
	
    $con=new mysqli("localhost","root","","std");
    
    $doctor_name = $_POST["doctor_name"];
    $password = $_POST ["password"];
    
     $qu = mysqli_query($con,"select * from doctorregistration where doctor_name = '$doctor_name' and password = '$password'");
    if(mysqli_num_rows($qu) == 0){
        $row = array();
        
        print_r(json_encode($row));
    }
    else
    {
        
        
       // $rows = mysqli_num_rows($qu);
        while($row = mysqli_fetch_assoc($qu))
        {
            $pp[]  = $row;
            
        }
        //print_r($pp);
        echo json_encode($pp);

        
    }
    

    
?>


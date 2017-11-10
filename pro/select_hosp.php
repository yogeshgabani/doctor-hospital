<?php
	
    $con=new mysqli("localhost","root","","std");
    
    $hospital_name = $_POST["hospital_name"];
    $contact_no = $_POST ["contact_no"];
    
     $qu = mysqli_query($con,"select * from hospital where hospital_name = '$hospital_name' and contact_no = '$contact_no'");
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


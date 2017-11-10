<?php
    $con=new mysqli("localhost","root","","std");

    
    $data=file_get_contents('php://input');
    
    $dt = json_decode($data);
    
   $hospital_name = $dt->hospital_name;
    $address = $dt->address;
    $city = $dt->city;
    $website = $dt->website;
    $contact_no = $dt->contact_no;
    $img  = $dt->imgpath;
   
    define('UPLOAD_DIR', 'images/');
    
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR . uniqid() . '.png';
        $success = file_put_contents($file, $data);
        print $success ? $file : 'Unable to save the file.';
    
    
   echo $query="insert into hospital (hospital_name,address,city,website,contact_no,imgpath) values('$hospital_name','$address','$city','$website','$contact_no','$file')";
    
    $con->query($query);
    echo"done";
   
    ?>

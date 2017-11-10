<?php
    $con=new mysqli("localhost","root","","std");

    
    $data=file_get_contents('php://input');
    
    $dt = json_decode($data);
    
   $doctor_name = $dt->doctor_name;
    $doc_qua = $dt->doc_qua;
    $doc_spea = $dt->doc_spea;
    $city = $dt->city;
    $password = $dt->password;
    $img  = $dt->imgpath;
   
    define('UPLOAD_DIR', 'images/');
    
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR . uniqid() . '.png';
        $success = file_put_contents($file, $data);
        print $success ? $file : 'Unable to save the file.';
    
    
   echo $query="insert into doctorregistration (doctor_name,doc_qua,doc_spea,city,password,imgpath) values('$doctor_name','$doc_qua','$doc_spea','$city','$password','$file')";
    
    $con->query($query);
    echo"done";
   
    ?>

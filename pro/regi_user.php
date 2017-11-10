<?php
    $con=new mysqli("localhost","root","","std");

    
    $data=file_get_contents('php://input');
    
    $dt = json_decode($data);
    
   $username = $dt->username;
    $mob_no = $dt->mob_no;
    $email_id = $dt->email_id;
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
    
    
   echo $query="insert into registration (username,mob_no,email_id,city,password,imgpath) values('$username','$mob_no','$email_id','$city','$password','$file')";
    
    $con->query($query);
    echo"done";
   
    ?>

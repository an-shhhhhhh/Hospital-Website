<?php
    session_start();

    require_once('db.php');
    // header('location: new.php');

    mysqli_select_db($con, 'hospital');

    // $usertype    = $_POST['usertype'];
    $name        = $_POST['name'];
    $address     = $_POST['address'];
    $phone       = $_POST['phone'];
    $gender      = $_POST['gender'];
    $dob         = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $uid         = $_POST['uid'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];

    $s = "SELECT * FROM `users` WHERE email='$email'";
    $result   = mysqli_query($con, $s);

    $num= mysqli_num_rows($result);

    if($num==1){

        //message to be displayed when the same user tries to register again.
        $_SESSION['message1']="It seems you have registered earlier, please login now instead of registering!";
    }
    else{
    
        //insert all the data into database table
        $query    = "INSERT into `users` (usertype,name,address,phone,gender,dob,blood_group,uid,email,password) VALUES ('$usertype', '$name', '$address', '$phone', '".$gender."', '".$dob."','$blood_group','$uid', '$email', '" . $password . "')";

        mysqli_query($con, $query);

        //message to be displayed when the user registers successfully!
        $_SESSION['status']="Registered successfully!";
        
    }

?>
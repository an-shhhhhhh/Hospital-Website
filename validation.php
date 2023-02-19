<?php
    session_start();
    require_once('db.php');
    
    
    $usertype   = $_POST['usertype'];
    $name       = $_POST['name'];
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $gender     = $_POST['gender'];
    $dob        = $_POST['dob'];
    $blood_group= $_POST['blood_group'];
    $uid        = $_POST['uid'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];


    $s = "SELECT * FROM `users` WHERE email='$email' && password='$password'"; 

    $result   = mysqli_query($con, $s);

    $num= mysqli_num_rows($result);


    if($num==1){

        $_SESSION['email']=$email;
        
        switch($usertype){

            //when the usertype is admin , he will be redirected to admin's display page
            case 'admin':
                header("Location: admin_display.php");
                exit();
                break;

            //when the usertype is doctor , he will be redirected to doctor's display page
            case 'doctor':
                header("Location: doctor_display.php");
                exit();
                break;

            //when the usertype is patient , he will be redirected to users page
            case 'patient':
                header("Location: login.php");
                exit();
                break;

            //when the usertype is blank that means he is a patient so , he will be redirected to users page
            case NULL:
                header("Location: login.php");
                exit();
                break;
        }
        
    }
    else{
        //message to be displayed when user enters wrong email id or password.
        $_SESSION['message2']="Invalid username or password";

        //and after entering wrong email id or password , he will be redirected to the home page.
        header('location: new.php');
    }

?>
<?php

include 'mycon.php';

session_start();

$errors = array();


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['fname']);  
    $email = mysqli_real_escape_string($conn, $_POST['email']);  
    $mobile = mysqli_real_escape_string($conn, $_POST['mobilenumber']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']); 

    $email_check = "SELECT * FROM tblusers WHERE EmailId = '$email'";  
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Email that you have entered is already exist!')</script>";
        $errors['email'] = "Email that you have entered is already exist!";
    }

    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);  
        $code = rand(999999, 111111);    
        $status = "notverified"; 
        $insert_data = "INSERT INTO tblusers (FullName, EmailId , MobileNumber, Password, code, status)
                        values('$name', '$email', '$mobile', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($conn, $insert_data);

        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: anisaome1999@gmail.com";  
            if(mail($email, $subject, $message, $sender)){
               
                $_SESSION['email'] = $email;
                
                header('location: user-otp.php');
                exit();
            }else{
                echo "<script>alert('Failed while sending code!')</script>";
                $errors['otp-error'] = "Failed while sending code!";
            }
            
        }else{
            echo "<script>alert('Failed while inserting data into database!')</script>";
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}


?>

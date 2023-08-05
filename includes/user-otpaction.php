<?php 

include 'mycon.php';

session_start();

if(isset($_POST['check'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM tblusers WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['EmailId'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE tblusers SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
        if($update_res){
            $_SESSION['email'] = $email;
            $_SESSION['login'] = $email;
            header('location: ../index.php');
            exit();
        }else{
            $errors['otp-error'] = "Failed while updating code!";
        }
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}


?>
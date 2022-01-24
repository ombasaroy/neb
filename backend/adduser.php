<?php
include "../connection.php";

session_start();

//variables to store user input
$fullname = $username = $access_level = $user_password = "";

//error variables 
$password_err = $username_err = $fullname_err = "";

//session variables
$_SESSION['success'] = "User added succesfully";
$_SESSION['failed'] = "User not added";
$_SESSION['detailsexist'] = "User already created";
$_SESSION['username_taken'] = "Username already taken";


if(isset($_POST['create-user'])){
    $access_level = $_POST['access-level'];

    $pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
    if(preg_match($pattern, $_POST['user-password'])){
        $user_password = md5($_POST['user-password']);
    } else {
    $password_err = "ERROR: Your password must have at least 
                one(1) uppercase letter, one(1) number. and
                one(1) special character e.g @,#,?
            ";
    }

    if(ctype_alpha(str_replace(' ', '',$_POST['username']))){
        
        $username = $_POST['username'];
    }else{
        $username_err = "Username can only contain letters";
    }

    if (ctype_alpha(str_replace(' ', '',$_POST['fullname'])))  {
        
        $fullname = $_POST['fullname'];
    }else{
        $fullname_err = 'Name must contain letters and spaces only';
    }

    

    if(strlen($fullname) > 0 && strlen($username) > 0 && strlen($user_password) > 8){
        $sql = "INSERT INTO users(fullname,username,access_level,user_password) VALUES('$fullname', '$username', '$access_level', '$user_password')";
        if($conn->query($sql)){
            header('location: ../admin/users.php?success');
            
        }else{
            header('location: ../admin/users.php?failed');
        }

    }


    
}

?>
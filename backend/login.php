<?php
    session_start();
    include "../connection.php";
    

    //login variables
    $username = $password = $access_level = "";

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if(!empty($username) && !empty($password)){
            $sql = "SELECT * FROM users where username = '$username' AND user_password = '$password'";

            $result = mysqli_query($conn,$sql);

            $num = mysqli_num_rows($result);

            if($num == 1){

                while($row = $result->fetch_assoc()){
                    $access_level = $row['access_level'];
                    $_SESSION['full_name'] = $row['fullname'];
                    $_SESSION['logged'] = 1;
                }
                switch($access_level){
                    case 'admin':
                        header("location: ../admin/dashboard.php");
                        break;
                    case 'clerk':
                        header("location: ../clerk/add.php");
                        break;
                    case 'leadership':
                        header("location: ../leadership/dashboard.php");
                        break;
                    case 'neb':
                        header("location: ../admin/dashboard.php");
                        break;
                    default:
                        header("location: ../index.php");
                        break;

                }
                // if($access_level == 'admin'){
                //     header("location: ../admin/dashboard.php");
                // }elseif($access_level == 'clerk'){
                //     header("location: ../clerk/add.php");
                // }elseif($access_level == 'neb'){
                //     header("location: ../admin/dashboard.php");
                // }elseif($access_level == 'leadership'){
                //     header("location: ../leadership/dashboard.php");
                // }else{
                //     header("location: ../index.php");
                // }

                
            }else{
                $_SESSION['invalid_details'] = "Wrong username or password";
                header("location: ../index.php?invalid_details");
            }
        }


    }
?>
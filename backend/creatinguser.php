<?php
    include '../connection.php';

    //variables to store user input

    $fullname = $username = 
    $access_level = $user_password = " ";

    //error variables
    $fullname_err = $username_err = $password_err = " ";

    if(isset($_POST['create-user'])){

    //validating the full name
        if (ctype_alpha(str_replace(' ', '',$_POST['fullname']))){
            $fullname = $_POST['fullname'];
        }else{
            $_SESSION['fullname_err'] = "Name can only contain letters";
        }

    //validating the username starts here
        if (ctype_alpha(str_replace(' ', '',$_POST['username'])))
        {
            $username = $_POST['username'];
        }
        else
        {
            $_SESSION['username_err'] = "Username can only contain letters";
        }
        // if (ctype_alpha(str_replace(' ', '',$_POST['username']))){
        //     $username = $_POST['username'];
        // }else{
        //     $_SESSION['username_err'] = "Username can only contain letters";
        // }
    //validating the username ends here
        

    //validating user password starts here
        $pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
        if(preg_match($pattern, $_POST['user-password'])){
            $user_password = md5($_POST['user-password']);
        } else {
        $_SESSION['password_err'] = "ERROR: Your password must have at least 
                    one(1) uppercase letter, one(1) number, and
                    one(1) special character e.g @,#,?
                ";
        }
    //validating user password ends here

    //fetching the access level - start
        $access_level = $_POST['access-level'];
        
    //to deter blanks from being stored in the db
        if(strlen($fullname) > 0 && strlen($username) > 0 && strlen($user_password) > 8){
            //Checking if the username is already taken
            $sql= "SELECT * FROM users WHERE username = '$username'";

            $result = mysqli_query($conn,$sql);
                
            //finding number of rows that match my sql 
            $num = mysqli_num_rows($result);

            if ($num >= 1) {
                # code...
                $_SESSION['detailsexist'] = "Username already taken!";
                header('location: ../admin/users.php?exist');

            }else{
                $stmt = $conn->prepare("INSERT INTO users(fullname,
                username,access_level,user_password) VALUES (?,?,?,?)");
        
                $stmt->bind_param("ssss", $fullname,$username,$access_level,$user_password);
        
                if ($stmt->execute() === TRUE) {
                    # code...
                    $_SESSION['success']="User added sucessfully";
                    header('location: ../admin/users.php?success');
                    
                }
                else{
                    $_SESSION['failed'] = "ERROR: User not created!";
                    header('location: ../admin/users.php?failed');
                }
        

            }
            }else{
                $_SESSION['failed'] = "ERROR: User not created";
                header('location: ../admin/users.php?failed');
            }
        

       
    }

?>
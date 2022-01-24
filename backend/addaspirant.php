<?php

    include "../connection.php";
    session_start();

    //variables to store user input
    $sn = $position = $county = $constituency = $ward = $title = 
    $surname = $other_names = $id_document = $id_passport_number = 
    $occupation = $email = $phone_number = $other_numbers = $gender =
     $date_of_birth = $special_category = "";

    //session variables
    
    


    //getting user input
    if(isset($_POST['add'])){
        

        //validating the Serial Number
        if (preg_match("/^[0-9]+$/i",$_POST['sn']))
        {
            $sn = $_POST['sn'];
        }
        else
        {
            $_SESSION['sn_err'] = "Serial number can only have numbers and have a length of 4 numbers";
        }

        $position = $_POST['position'];
        $county = $_POST['county'];
        $constituency = $_POST['constituency'];
        $ward = $_POST['ward'];
        $title =$_POST['title'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date-of-birth'];
        $special_category = $_POST['special-group'];


    //     //validating the surname

        if (ctype_alpha(str_replace(' ', '',$_POST['surname']))){
            $surname = $_POST['surname'];
        }else{
            $_SESSION['surname_err'] = "Surname can only contain letters";
        }
        
    //     //validating other names
        if (ctype_alpha(str_replace(' ', '',$_POST['other-names']))){
            $other_names = $_POST['other-names'];
        }else{
            $_SESSION['other_names_err'] = "Names can only contain letters";
        }

        $id_document = $_POST['identification-document'];
        

    //     //validating the identification number
        if (preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,10}$/', $_POST['id-passport-number']) || is_numeric($_POST['id-passport-number']))
        {
            if(strlen($_POST['id-passport-number']) < 9){
                $id_passport_number = $_POST['id-passport-number'];
            }else
            {
                $_SESSION['id_passport_err'] = "Identification document can only have numbers and letters";
            }
        }
            
            
        

    // //     //validating the email
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
          }else{
            $_SESSION['email_err'] = "Invalid email format";
          }
        
    //     //validating phone number 
        if (preg_match('/^[0-9]+$/', $_POST['phone-number'])) {
            $phone_number = $_POST['phone-number'];
          } else {
            $_SESSION['phone_err'] = "Only numbers allowed";
          }
        
    //     //validating other phone numbers
        if (preg_match('/^[0-9]+$/', $_POST['other-numbers'])) {
            $other_numbers = $_POST['other-numbers'];
          } else {
            $_SESSION['other_phone_err'] = "Only numbers allowed";
          }

        if(strlen($sn) > 0 && strlen($surname) > 0 && strlen($other_names) > 0 && strlen($id_passport_number) > 0 && strlen($phone_number) > 0 && strlen($other_numbers) > 0) {
            $sql = "SELECT * FROM aspirants WHERE sn ='$sn' OR id_passport_number = '$id_passport_number'";

            $result = mysqli_query($conn,$sql);

            $num = mysqli_num_rows($result);

            if($num>=1){
                $_SESSION['exists'] = "Serial number or ID number already exists";
                header('location: ../admin/add.php?exists');
            }else{
                $stmt = $conn->prepare("INSERT INTO aspirants(sn,position,county,constituency,ward,title,surname,other_names,identification_document,id_passport_number,occupation,email,phone_number,other_phone_numbers,gender,date_of_birth,special_category) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
           
                $stmt->bind_param("sssssssssssssssss",$sn,$position,$county,$constituency,$ward,$title,$surname,$other_names,$id_document,$id_passport_number,$occupation,$email,$phone_number,$other_numbers,$gender,$date_of_birth,$special_category);

                if($stmt->execute()===TRUE){
                    $_SESSION['success'] = "Aspirant added successfully";
                    header('location: ../admin/add.php?success');
                }

            }

            
        }else{
            $_SESSION['wrong_values'] = "Wrong values entered";
            header('location: ../admin/add.php?failed');
        }


        
        
    }
    
    
?>
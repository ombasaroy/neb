<?php

include "../connection.php";
session_start();
    $id=0;

    if (isset($_GET['delete'])) {
        # code...
       $id = $_GET['delete'];

       $delete_sql = "DELETE FROM aspirants WHERE id = $id";

       if ($conn->query($delete_sql) === TRUE) {
         # code...
         $_SESSION['deleted'] = "Aspirant details deleted successfully";
          header('location: ../admin/governors.php');
       }else{
        $_SESSION['not_deleted'] = "Aspirant not deleted";
          header('location: ../admin/governors.php');
       }

      }

?>
<?php
     require_once 'include/auth_check.php';
     require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'include/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        // Get ID values
        $id = $_GET['id'];
        //Call Delete function
        $result = $crud->deleteAttendee($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            include 'include/errormessage.php';
        }
    }
?>
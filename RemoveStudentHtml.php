<?php
    session_start();
    include "StudentConnection.php";

    $rollNo = $_GET['id'];
    if($rollNo != 0){
        $sql = "DELETE FROM mark WHERE Rollno = '$rollNo'";
        if(mysqli_query($conn,$sql)){
            header("location: RemoveStudent.php");
        }
    }
    else{
        $_SESSION['add'] = "Student not deleted";
        header("location: RemoveStudent.php");
    }
    mysqli_close($conn);
?>
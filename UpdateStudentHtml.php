<?php
    session_start();
    include "StudentConnection.php";

    $rollNo = $_GET['id'];
    if($rollNo != 0){
        $sql = "DELETE FROM mark WHERE Rollno = '$rollNo'";
        if(mysqli_query($conn,$sql)){
            header("location: UpdateStudent.php");
        }
    }
    else{
        $_SESSION['add'] = "Student not deleted";
        header("location: UpdateStudent.php");
    }
    mysqli_close($conn);
?>
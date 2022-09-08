<?php
    session_start();
    include "EmployeeConnection.php";

    $EmpNo = $_GET['id'];
    if($EmpNo != 0){
        $sql = "DELETE FROM emp WHERE Empno = '$EmpNo'";
        if(mysqli_query($conn,$sql)){
            header("location: RemoveEmployee.php");
        }
    }
    else{
        $_SESSION['add'] = "Employee not deleted";
        header("location: RemoveEmployee.php");
    }
    mysqli_close($conn);
?>
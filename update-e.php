
<?php
    if(isset($_REQUEST['Ename'])){

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$Empno=$_REQUEST['Empno'];
$Ename=$_REQUEST['Ename'];
$Bsalary=$_REQUEST['Bsalary'];

// $sql = "INSERT INTO mark VALUES (NULL, '$sname', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5');";
$sql = "UPDATE emp SET Ename='$Ename',Bsalary='$Bsalary' WHERE Empno=$Empno" ;
if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Updated Successfully');</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Splash&display=swap" rel="stylesheet">
    <link rel="icon" href="./C.jpg">
    <link rel="stylesheet" href="./css2.css">
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body><?php include 'EmployeeConnection.php';?>
<?php include 'header_e.php';?>
    <div class="div1">
        <div class="divvi1">
        
            <div class="form">
                
                <div class="form-u">
    <div class="up-b1">
        <div class="student-details">Employee Update</div>
        <form action="" method="post">
            <input type="number" id="in-1" name="Empno" placeholder="Enter The Usn to update" style="margin-left:45px ;">
            <input type="submit" class="up-b22" name="update" value="UPDATE" style="margin-left: 46px;margin-top: 25px;background-color: #ff8700;padding: 9px;border-radius: 10px;border: none;">        </form>
    </div> 
<?php
   if (isset($_POST['update'])) { //to check if the form was submitted
    $Empnoo= $_POST['Empno'];
     ?>

                   
                    <form method="post" id="form1" action="update-e.php">
                        <table>     
                            <tr>
                                <td><label for="Empno"> EmpNo  </label></td>
                                <td><input type="number" id="rollno" value="<?php echo $Empnoo; ?>" name="Empno" readonly></td>
                            </tr>
                            <tr>
                                <td><label for="name"> Name  </label></td>
                                <td><input type="text" id="name1" name="Ename" required></td>
                            </tr>
                            <tr>
                                <td><label for="Sub1"> Salary </label></td>
                                <td><input type="number" id="sub11" name="Bsalary" required></td>
                            </tr>
                    
                        </table>
                        <a href="#">
                            <button class="full-rounded" type="submit">
                                <div class="border">    
                                    <span>Submit</span>
                                </div>
                            </button>
                        </a>        
                    </form>
                </div>
            </div>
<?php
            }
   
?>
            <!-- <input type="submit" value="submit" name="submit" class="submit"> -->
        </div>
        
    </div>
   <?php include 'footer.php';?>
    <script src="./Courses.js"></script>

</body>

</html>


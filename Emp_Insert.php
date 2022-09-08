
<?php
if( isset($_POST['Empno'])){
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
$sql="INSERT INTO `emp` (`Empno`, `Ename`, `Bsalary`) VALUES ('$Empno', '$Ename', '$Bsalary');";
// $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Inserted Successfully');</script>";
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
    <script>
function myEmpInsert() {
  alert("Data Inserted Successfully");
}
</script>
</head>

<body>
    <div class="div1">
        <div class="divvi1">
        <?php include 'header_e.php';?>
            <div class="form">
                <div class="form-u">
                    <div class="student-details">Insert Employee Details</div>
                    <form method="post" id="form1" action="Emp_Insert.php">
                        <table>
                            <tr>
                                <td><label for="Empno"> EmpNo  </label></td>
                                <td><input type="number" id="rollno" name="Empno" required></td>
                            </tr>
                            <tr>
                                <td><label for="Ename"> Name  </label></td>
                                <td><input type="text" id="name1" name="Ename" required></td>
                            </tr>
                            <tr>
                                <td><label for="Bsalary"> Salary  </label></td>
                                <td><input type="number" id="sub11" name="Bsalary" required></td>
                            </tr>
                            
                        </table>
                        <a href="#">
                            <button class="full-rounded" type="submit" >
                                <div class="border">    
                                    <span>Submit</span>
                                </div>
                            </button>
                        </a>
                    </form>
                </div>
            </div>

            <!-- <input type="submit" value="submit" name="submit" class="submit"> -->
        </div>
        <?php include 'footer.php';?>
    </div>
   
    <!-- <div class="footer-b1"></div> -->
    <script src="./Courses.js"></script>

</body>

</html>


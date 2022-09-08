
<?php
if( isset($_POST['rollno'])){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$rollno=$_REQUEST['rollno'];
$sname=$_REQUEST['name'];
$sub1=$_REQUEST['sub1'];
$sub2=$_REQUEST['sub2'];
$sub3=$_REQUEST['sub3'];
$sub4=$_REQUEST['sub4'];
$sub5=$_REQUEST['sub5'];

// $sql = "INSERT INTO mark VALUES (NULL, '$sname', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5');";
$sql = "UPDATE mark SET Sname='$sname',sub1='$sub1', sub2='$sub2', sub3='$sub3', sub4='$sub4',sub5='$sub5' WHERE Rollno=$rollno" ;
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

<body><?php include 'StudentConnection.php';?>
<?php include 'header.php';?>
    <div class="div1">
        <div class="divvi1">
        
            <div class="form">
                
                <div class="form-u">
                
                
                    
    
    <div class="up-b1">
        <div class="student-details">Student Update</div>
        <form action="" method="post">
            <input type="number" id="in-1" name="Rollno" placeholder="Enter The Usn to update" style="margin-left:45px ;">
            <input type="submit" class="up-b22" name="update" value="UPDATE" style="margin-left: 46px;margin-top: 25px;background-color: #ff8700;padding: 9px;border-radius: 10px;border: none;">        </form>
    </div> 
<?php
   if (isset($_POST['update'])) { //to check if the form was submitted
    $username= $_POST['Rollno'];
     ?>

                   
                    <form method="post" id="form1" action="update.php">
                        <table>     
                            <tr>
                                <td><label for="rollno"> RollNo  </label></td>
                                <td><input type="number" id="rollno" value="<?php echo $username; ?>" name="rollno" readonly></td>
                            </tr>
                            <tr>
                                <td><label for="name"> Name  </label></td>
                                <td><input type="text" id="name1" name="name" required></td>
                            </tr>
                            <tr>
                                <td><label for="Sub1"> Sub1  </label></td>
                                <td><input type="number" id="sub11" name="sub1" required></td>
                            </tr>
                            <tr>
                                <td><label for="Sub2"> Sub2  </label></td>
                                <td><input type="number" id="sub12" name="sub2" required></td>
                            </tr>
                            <tr>
                                <td><label for="Sub3"> Sub3  </label></td>
                                <td><input type="number" id="sub13" name="sub3" required></td>
                            </tr>
                            <tr>
                                <td><label for="Sub4"> Sub4  </label></td>
                                <td><input type="number" id="sub14" name="sub4" required></td>
                            </tr>
                            <tr>
                                <td><label for="Sub5"> Sub5  </label></td>
                                <td><input type="number" id="sub15" name="sub5" required></td>
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


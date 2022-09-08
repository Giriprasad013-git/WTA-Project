<?php

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
$sql = " SELECT * FROM `emp`";
$result = $conn->query($sql);
$conn->close();
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

    <body>
        <div class="div1">

            <?php include 'header_e.php';?>


            <div class="divvi2">
                <div class="student-details">Employee Details</div>
                <form action="" method="post">
                    <input type="text" id="in-1" name="Ename" placeholder="Enter The Emp name to find">
                    <input type="submit" class="up-b22" name="submit" value="SUBMIT" style=" padding: 9px;
        background-color: cadetblue;
        border: none;
        border-radius: 10px;">
                </form>
                <table class="riport-tab">
                    <tr class="tcc">
                        <th>EmpNo</th>
                        <th>Employee Name</th>
                        <th>Salary</th>
                    </tr>
                    <?php
        include "EmployeeConnection.php";

        if(isset($_POST['submit'])){
            $Name = $_POST['Ename'];
            $firstChar = substr($Name,0,1);
            $sql = "SELECT * from emp WHERE Ename LIKE '$firstChar%'";
            $sqlReult = mysqli_query($conn,$sql);
                while($rows = mysqli_fetch_array($sqlReult)){  
                                  if(mysqli_num_rows($sqlReult) > 0){?>

                        <tr class="tcc">
                            <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                        <td class="tc"><?php echo $rows['Empno'];?></td>
                    <td class="tc"><?php echo $rows['Ename'];?></td>
                    <td class="tc"><?php echo $rows['Bsalary'];?></td>
                        <?php
                }
                 } }
            ?>
            </div>
        </div>
    </body>

    </html>
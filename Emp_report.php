
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

            <table class="riport-tab">
                <tr class="tcc">
                    <th>EmpNo</th>
                    <th>Employee Name</th>
                    <th>Salary</th>
                    <th>DA</th>
                    <th>HRA</th>
                    <th>MA</th>
                    <th>Insurance</th>
                    <th>netsalary</th>
                    
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                    // LOOP TILL END OF DATA
                    while($rows=$result->fetch_assoc())
                    {
                ?>
                <tr class="tcc">
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td class="tc"><?php echo $rows['Empno'];?></td>
                    <td class="tc"><?php echo $rows['Ename'];?></td>
                    <td class="tc"><?php echo $rows['Bsalary'];?></td>
                    <td class="tc"><?php $DA=(80*$rows['Bsalary'])/100;
                    echo $DA;?></td>
                    <td class="tc"><?php $HRA=(15*$rows['Bsalary'])/100;
                    echo $HRA;?></td>
                    <td class="tc"><?php $MA=(12*$rows['Bsalary'])/100;
                    echo $MA;?></td>
                    <td class="tc"><?php $INSS=(10*$rows['Bsalary'])/100;
                    echo $INSS;?></td>
                    <td class="tc"><?php $NETS=($rows['Bsalary']+$HRA+$MA);
                    echo $NETS;?></td>

                </tr>
                
                <?php
                    }
                ?>
            </table>
        </div>
        <?php include 'footer.php';?>
    </div>
   
    <script src="./Courses.js"></script>

</body>

</html>


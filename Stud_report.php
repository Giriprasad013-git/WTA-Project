
<?php

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
$sql = " SELECT * FROM `mark`";
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
      
        <?php include 'header.php';?>

        
        <div class="divvi2">        <div class="student-details">Employee Details</div>

            <table class="riport-tab">
                <tr class="tcc">
                    <th>RollNo</th>
                    <th>Student Name</th>
                    <th>sub1</th>
                    <th>sub2</th>
                    <th>sub3</th>
                    <th>sub4</th>
                    <th>sub5</th>
                    <th>Total</th>
                    <th>Average</th>
                    <th>Class</th>
                    <th>Result</th>
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
                    <td class="tc"><?php echo $rows['Rollno'];?></td>
                    <td class="tc"><?php echo $rows['Sname'];?></td>
                    <td class="tc"><?php echo $rows['sub1'];?></td>
                    <td class="tc"><?php echo $rows['sub2'];?></td>
                    <td class="tc"><?php echo $rows['sub3'];?></td>
                    <td class="tc"><?php echo $rows['sub4'];?></td>
                    <td class="tc"><?php echo $rows['sub5'];?></td>       
                    <td class="tc"><?php
                                        $total= $rows['sub1']+$rows['sub2']+$rows['sub3']+$rows['sub4']+$rows['sub5'];
                                        echo $total;?></td>
                    <td class="tc"><?php
                                        $ave=$total/5;
                                        $avee=Intval($ave);
                                        echo $ave;?>%</td>
                    <td class="tc"><?php
                                        if (($avee>80)||$avee==80) {
                                            $ress="A";
                                        }
                                        elseif(((80>$avee)&&($avee>60))||($avee==60)){
                                            $ress="B";
                                        }
                                        elseif(((50<$avee)&&($avee<60))||($avee==50)){
                                            $ress="C";
                                        }
                                        elseif(50>$avee){
                                            $ress="D";
                                        }
                                        
                                        echo $ress;?></td>
                    <td class="tc"><?php
                                        if (($avee>80)||$avee==80) {
                                            $ress="Distinction";
                                        }
                                        elseif(((80>$avee)&&($avee>60))||($avee==60)){
                                            $ress="First Class";
                                        }
                                        elseif(((50<$avee)&&($avee<60))||($avee==50)){
                                            $ress="Second Class";
                                        }
                                        elseif(50>$avee){
                                            $ress="No Class";
                                        }
                                       
                                        echo $ress;?></td>
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


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


            <div class="divvi2">
                <div class="student-details">Student Details</div>
                <form action="" method="post">
                    <input type="text" id="in-1" name="Sname" placeholder="Enter The Emp name to find">
                    <input type="submit" class="up-b22" name="submit" value="SUBMIT" style=" padding: 9px;
        background-color: cadetblue;
        border: none;
        border-radius: 10px;">
                </form>
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
                    <?php
        include "StudentConnection.php";

        if(isset($_POST['submit'])){
            $Name = $_POST['Sname'];
            $firstChar = substr($Name,0,1);
            $sql = "SELECT * from mark WHERE Sname LIKE '$firstChar%'";
            $sqlReult = mysqli_query($conn,$sql);
                while($rows = mysqli_fetch_array($sqlReult)){  
                                  if(mysqli_num_rows($sqlReult) > 0){?>

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
                 } }
            ?>
            </div>
        </div>
    </body>

    </html>
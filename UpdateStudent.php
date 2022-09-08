<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">        
    <link rel="icon" href="./C.jpg">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>       
        <?php include 'header.php';?>
         
        <!--  -->
        <div class="up-a">
            <div class="up-b">
            <div class="up-b1">
            <p>UPDATE</p>
            <form action="" method="post">
                <input type="number" id="in-1" name="rollno" placeholder="Enter The Usn to update">
                <input type="submit" class="up-b22" name="update" value="UPDATE">
            </form>
        </div> 
        <?php
    include "StudentConnection.php";
    if(isset($_POST['update'])){
        $rollno = $_POST['rollno'];
        $sql = "SELECT * FROM mark WHERE rollno = '$rollno' ";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_assoc($result)){ ?>

<style>
<?php include 'css2.css'; ?>
</style>
     <table class="riport-tab">
     <tr class="tcc">
         <th>Roll No</th>
         <th>Student Name</th>
         <th>Subject I</th>
         <th>Subject II</th>            
         <th>Subject III</th>
         <th>Subject IV</th>
         <th>Subject V</th>            
     </tr>
        <tr class="tcc">
        <td class="tc"><?php echo $rows['Rollno'];?></td>
        <td class="tc"><?php echo $rows['Sname'];?></td>
        <td class="tc"><?php echo $rows['sub1'];?></td>
        <td class="tc"><?php echo $rows['sub2'];?></td>
        <td class="tc"><?php echo $rows['sub3'];?></td>
        <td class="tc"><?php echo $rows['sub4'];?></td>
        <td class="tc"><?php echo $rows['sub5'];?></td>     
    </tr>
    </table>
    <form action="" method="post">
    <div class="alertMessage">
    <h3>Do you wish to delete the data of the above Student??</h3>.
        <table>
            <tr>
                <td class="td"><a href="UpdateStudentHtml.php?id= <?php echo $rows['Rollno'];?>" class="submit-btn">Yes</a></td>
                <td class="td"><a href="UpdateStudentHtml.php?id= <?php echo 0;?>" class="reset-btn" style="margin-left: 195px;">No</a></td>
            </tr>
        </table>
    </div>
    </form>
                <?php
                }
            }
            else{
                $_SESSION['update'] = "Student with Roll No: ".$rollno." is not present";
                header("location: UpdateStudentHtml.php");
            }
        }
?>  
                

                <?php 
                if( isset($_REQUEST['submit'])){
                    while($rows=$result->fetch_assoc())
                    {
                ?>
                <tr>
                    <td class="tc">
                        <?php echo $rows['Rollno'];?>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>

            </div>
            <!-- <br> -->
        </div>
        <!--  -->
        <?php include 'footer.php';?>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">        
    <link rel="icon" href="./C.jpg">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
function myEmpInsert() {
  alert("Data Removed Successfully");
}
</script>
</head>
<body>
    <div>       
        <?php include 'header_e.php';?>
         
        <!--  -->
        <div class="up-a">
            <div class="up-b">
            <div class="up-b1">
            <div class="student-details">Employee Delete</div>
            <form action="" method="post">
                <input type="number" id="in-1" name="Empno" placeholder="Enter The Empno to delete">
                <input type="submit" class="up-b22" name="remove" value="REMOVE" >
            </form>
        </div> 
        <?php
    include "EmployeeConnection.php";
    if(isset($_POST['remove'])){
        $Empno = $_POST['Empno'];
        $sql = "SELECT * FROM emp WHERE Empno = '$Empno' ";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_assoc($result)){ ?>

<style>
<?php include 'css2.css'; ?>
</style>
     <table class="riport-tab">
     <tr class="tcc">
         <th>Emp No</th>
         <th>Employee Name</th>
         <th>Salary</th>
           
     </tr>
        <tr class="tcc">
        <td class="tc"><?php echo $rows['Empno'];?></td>
        <td class="tc"><?php echo $rows['Ename'];?></td>
        <td class="tc"><?php echo $rows['Bsalary'];?></td>
         
    </tr>
    </table>
    <form action="" method="post">
    <div class="alertMessage">
    <h3>Do you wish to delete the data of the above Employee??</h3>.
        <table>
            <tr>
                <td class="td"><a href="RemoveEmpHtml.php?id= <?php echo $rows['Empno'];?>" class="submit-btn" onclick="myEmpInsert()">Yes</a></td>
                <td class="td"><a href="RemoveEmpHtml.php?id= <?php echo 0;?>" class="reset-btn" style="margin-left: 195px;">No</a></td>
            </tr>
        </table>
    </div>
    </form>
                <?php
                }
            }
            else{
                $_SESSION['remove'] = "Employee with  No: ".$Empno." is not present";
                header("location: RemoveEmpHtml.php");
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
                        <?php echo $rows['Empno'];?>
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
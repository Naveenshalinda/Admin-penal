 <?php include('./navlogout.php');?>
<h1 class=" m-2 p-2 fw-bold text-center fs-1">Log in</h1>

<form  class="m-4 p-2 "action="" method="post">
    <label class="form-lable fw-bold">User Name :-</label>
    <input type="text" name="un" class="form-control" placeholder="Enter Your Name..." required>
    <br>
    <br>
    <label  class="form-lable fw-bold" >Password :-</label>
    <input type="password" name="pw" class="form-control" placeholder="Enter Your Name..." required>
    <br>
    <br>
    <input type="Submit" name="log" value="Login" class="btn btn-danger">
</form>
<?php include('./footer.php');include('./connect.php');?>



<?php
if(isset($_POST['log']))
{
    $un=$_POST['un'];
    $pw=$_POST['pw'];
    
    $sql="SELECT * from admin where un='$un' and pw='$pw';";
    $res=mysqli_query($con,$sql);
    $row=mysqli_num_rows($res);
    
    if($row==1)
    {
        header('location:./home.php');
    }
    else
     { header('location:./login.php');}
    
}
?>
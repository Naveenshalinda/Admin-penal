<?php include('./navlogout.php');?>
<?php include('./footer.php');?>
<?php include('./connect.php');?>

    <div><h1 class= "fw-bold text-center">Add Student</h1></div>


<form action="" method="post"  class=" m-4 p-2">

<label class="form-lable  fw-bold">Name</label>
<input type="text" name="name" class="form-control" placeholder="Enter Your Name..." required>
<br>

<label class="form-lable  fw-bold">Reg No</label>
<input type="text" name="regno" class="form-control" placeholder="Enter Your Reg No..." required>
<br>

<input type="submit"  class="btn btn-success"  value="Add" name="add">
</form>
<?php
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $regno=$_POST['regno'];

    $sql="INSERT INTO student(name,regno)values('$name','$regno')";
    $res=mysqli_query($con,$sql);
    if($res){
        header('location:./home.php');
    }
    else{
        header('location:./add.php');
    }
}?>

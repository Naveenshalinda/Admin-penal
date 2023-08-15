<?php
include('./connect.php');
$id=$_GET['id'];

$mysql="delete from student where id='$id'";
$res=mysqli_query($con,$mysql);
if($res){
    header('location:./home.php');

}
else{
    echo "abfgfgf";
}

?>
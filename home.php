<?php include('./navlogout.php');
include('./connect.php');?>
    <div class="text-center fw-bold"><h1>Student Deatils</h1></div>

    <table class="table m-4 p-2">
        <a class="btn btn-success m-4" href="./add.php">Add New Student</a>
       <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Reg No</th>
            <th>Action</th>
        </tr>
</thead>
<tbody>
        <tr>
            <?php
            
            $sql="SELECT * from student";
            $res=mysqli_query($con,$sql);
            if($res){
                while($row=mysqli_fetch_assoc($res)){
                    $id= $row['id'];
                    ?>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['regno'];?></td>
                    <td>
                        <a class="btn btn-warning"href="./update.php">Update</a>
                        <a  class="btn btn-success"href="./delete.php ?id=<?php echo $id ?>">Delete</a>
                    </td></tr></tbody>
                    <?php
                }
            }       ?>
    </table>
<?php include('./footer.php');?>
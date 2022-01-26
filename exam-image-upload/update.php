<?php  
include "header.php";
include "db.php";
include "navbar.php";

if(isset($_GET['edit_id'])){
  $id=$_GET['edit_id'];
  $query = "select * from students where id = $id";
  $res = mysqli_query($connection,$query);
  $row = mysqli_fetch_assoc($res); 

}

?>

<div class="signup container mb-3">
 <h1 class="text-center my-2">Update student details </h1>
<form action="index.php?edit_id=<?php echo $_GET['edit_id'];?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo $row['name'] ?>" placeholder="name" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">roll</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="roll" value="<?php echo $row['roll'] ?>" name="roll" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['phone'] ?>" name="phone" placeholder="phone" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">email</label>
    <input type="email" class="form-control" id="formGroupExampleInput" name="email" value="<?php echo $row['email'] ?>" placeholder="email" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">session</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="session" value="<?php echo $row['session'] ?>" placeholder="session" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">address</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="address" value="<?php echo $row['address'] ?>" placeholder="address" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">current_semester</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="current_semester" value="<?php echo $row['current_semester'] ?>" placeholder="current_semester" required>
  </div>
  <span>
    <img src="./image/<?php echo $row['photo'];?>" width="60px" height="60px" alt="">
  </span>
  <div class="form-group">
    <label for="exampleFormControlFile1">image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button class="btn btn-primary btn-sm" type="submit" name="update">update student</button>
  
</form>

</div>


<?php  
include "footer.php";


?>

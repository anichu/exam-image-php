<?php 
session_start(); 
include "header.php";
include "navbar.php";
?>

<div class="signup container mb-3">
 <h1 class="text-center my-2">Create student details </h1>
<form action="index.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="name" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">roll</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="roll" name="roll" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="phone" placeholder="phone" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">email</label>
    <input type="email" class="form-control" id="formGroupExampleInput" name="email" placeholder="email" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">session</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="session" placeholder="session" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">address</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="address" placeholder="address" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">current_semester</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="current_semester" placeholder="current_semester" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button class="btn btn-primary btn-sm" type="submit" name="create_student">create student</button>
  
</form>

</div>


<?php  
include "footer.php";


?>

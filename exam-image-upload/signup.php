<?php  
include "header.php";
include "navbar.php";

?>

<div class="signup container">
 <h1 class="text-center my-2">sign up</h1>
<form action="index.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="name" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">email</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">password</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password" required>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="phone" name="phone" required>
  </div>
  <button class="btn btn-primary btn-sm" type="submit" name="signup">signup</button>
  
</form>

</div>


<?php  
include "footer.php";


?>

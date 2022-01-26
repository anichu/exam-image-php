
<?php  
include "header.php";
include "navbar.php";

?>

<div class="signup container">
 <h1 class="text-center my-2">log in</h1>
  <form action="index.php" method="POST">

    <div class="form-group">
      <label for="formGroupExampleInput2">email</label>
      <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="email" name="email" required>
    </div>


    <div class="form-group">
      <label for="formGroupExampleInput2">phone</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="phone" name="phone" required>
    </div>
    <button class="btn btn-primary btn-sm" type="submit" name="login">log in</button>
  </form>
  

</div>


<?php  
include "footer.php";
?>

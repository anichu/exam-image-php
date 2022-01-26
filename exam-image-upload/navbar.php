
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  
    <ul class="navbar-nav ml-auto" style="text-align: right;" >
    
      <?php  
      if(isset($_SESSION['phone'])){?>
      <li class="nav-item pl-3 pr-3">
        <a class="nav-link" href="create.php">Add student</a>
      </li>

<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    user
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">profile</a>
    <a class="dropdown-item" href="../admin?logout=logout">logout</a>
    
  </div>
</div>
      <?php } else{?>

      <li class="nav-item">
        <a class="nav-link" href="signup.php">signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signin.php">signin</a>
      </li>
      <?php }?>

    </ul>
  </div>
</nav>


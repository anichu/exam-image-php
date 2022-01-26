<?php

$query = "select * from students";
$res_students = mysqli_query($connection,$query);

if($res_students){
  // echo "success";
  // echo print_r($res_students);
}

?>

<div class="container" style="min-height: 90vh;">
<h1 class="text-center">Students Details</h1>
<table class="table table-striped table-dark mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">roll</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">session</th>
      <th scope="col">address</th>
      <th scope="col">current-semester</th>
      <th scope="col">photo</th>
      <th colspan="2">action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($res_students)){?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['roll'] ;?></td>
      <td><?php echo $row['phone'] ;?></td>
      <td><?php echo $row['email'] ;?></td>
      <td><?php echo $row['session']; ?></td>
      <td><?php echo $row['address'] ;?></td>
      <td><?php echo $row['current_semester']; ?></td>
      <td><img src="./image/<?php echo $row['photo'] ?>" width="50px" height="50px" alt="photo"></td>
      <td><a href="update.php?edit_id=<?php echo $row['id']; ?>">edit</a></td>
      <td><a href="index.php?delete_id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>

    <?php } ?>
    
  </tbody>
</table>

</div>



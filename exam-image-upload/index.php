<?php  
session_start();
include "db.php";
include "header.php";

if(isset($_SESSION['phone'])){

}else{
  header("location:signup.php");
}


if(isset($_POST['signup'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];

  $query = "insert into user(id,name,email,password,phone) values('','$name','$email','$password','$phone')";

  $res_signup = mysqli_query($connection,$query);

  if($res_signup){
    header('location:signin.php');
  }

}


if(isset($_POST['login'])){

  echo $_POST['email'];

  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $query = "select * from user WHERE email = '$email' AND phone = '$phone'";
  $res_signin = mysqli_query($connection,$query);
  $row = mysqli_fetch_assoc($res_signin);

  print_r($res_signin);
  if($row['email'] == $email){
    if($row['phone'] == $phone){
      $_SESSION['email'] = $row['email'];
      $_SESSION['phone'] = $row['phone'];
      header('location:index.php');
    }
  }
  else{
    echo "<script>alert('$message');</script>";
  }

}

if(isset($_GET['logout'])){
  session_destroy();
  header('location:index.php');

}

if(isset($_POST['create_student'])){
  // echo $_POST['name'] ;
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $session = $_POST['session'];
  $address = $_POST['address'];
  $current_semester = $_POST['current_semester'];

  

  // $target_dir = "uploads/";
  // $target_file = $target_dir . basename($_FILES["image"]["name"]);
  // $image = $_FILES["image"]["name"];
  // echo $image;

  // move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/");

  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];    
  $folder = "image/".$filename;
  move_uploaded_file($tempname, $folder);
  $c_query ="INSERT INTO students (id,name,roll,phone,email,session,address,current_semester,photo) VALUES ('', '$name', '$roll','$phone','$email','$session','$address','$current_semester','$filename' )";
  if(mysqli_query($connection,$c_query)){
    header('location:index.php');
  }else{
    die(mysqli_errno($connection));
  }
}


// for update
if(isset($_POST['update']))
{
  $id = $_GET['edit_id'];
  // echo $id;
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $session = $_POST['session'];
  $address = $_POST['address'];
  $current_semester = $_POST['current_semester'];

  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];    
  $folder = "image/".$filename;
  move_uploaded_file($tempname, $folder);
  $query = "update students set name = '$name',roll = '$roll',phone='$phone',email='$email', session='$session',address='$address', current_semester='$current_semester',photo='$filename' where id = $id";
  // mysqli_query($connection,$query);

  if(mysqli_query($connection,$query)){
    header('location:index.php');
  }else{
    die(mysqli_error($connection));
  }

}



// for delete
if(isset($_GET['delete_id'])){
  $d_id = $_GET['delete_id'];
  $d_query = "delete from students where id = $d_id";
  mysqli_query($connection,$d_query);
}

include "navbar.php";

include "read.php";

include "footer.php";
?>

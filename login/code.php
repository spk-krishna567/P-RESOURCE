<?php
 
 include "security.php";

 if(isset($_POST['login'])){
    $name=$_POST['user_name'];
    $pass=$_POST['password'];

  $query="SELECT * FROM  user WHERE username='$name' or rollno='$name'";
  $query_run=mysqli_query($connection,$query);
  $count=mysqli_num_rows($query_run);

  if($count>0){
     $row=mysqli_fetch_assoc($query_run);
     if($pass==$row['password']){
      $_SESSION['admin_name']=$row['username'];
      $_SESSION['admin_id']=$row['id'];
      header('Location:index.php');
     }
     else{
      $_SESSION['status']="password wrong";
    header('Location:login.php');
     }
     
  }
  else{
    $_SESSION['status']="user doesn't exist";
    header('Location:login.php');
  }
}


if(isset($_POST['logout'])){
  unset($_SESSION['admin_id']);
  unset($_SESSION['admin_name']);
  header('Location:login.php');
}
?>
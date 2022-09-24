<?php
 
 include "security.php";

 if(isset($_POST['login'])){
    $name=$_POST['admin_name'];
    $pass=$_POST['password'];

  $query="SELECT * FROM admin WHERE username='$name' or email='$name'";
  $query_run=mysqli_query($connection,$query);
  $count=mysqli_num_rows($query_run);

  if($count>0){
     $row=mysqli_fetch_assoc($query_run);
     if(password_verify($pass,$row['password'])){
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
    $_SESSION['status']="admin doesn't exist";
    header('Location:login.php');
  }
}


if(isset($_POST['logout'])){
  unset($_SESSION['admin_id']);
  unset($_SESSION['admin_name']);
  header('Location:login.php');
}


if(isset($_POST['upload_info'])){
   
   $title=$_POST['title'];
   $domain=$_POST['domain'];
   $discription=$_POST['discription'];
   $level=$_POST['level'];
   $links=$_POST['links'];
   
   date_default_timezone_set('Asia/Kolkata');
   $uploaded_at=date('d-m-y H:i');

   $query="INSERT INTO sources(title,domain,discription,level,links,time) VALUES('$title','$domain','$discription','$level','$links','$uploaded_at')";
  $query_run=mysqli_query($connection,$query);
  

  if($query_run){
    $_SESSION['status']="resource_uploaded";
    header('Location:index.php');
  }
  else{
    echo "not inserted";
  }
}
?>
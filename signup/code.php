<?php
 include '../includes/links.php';

if(isset($_POST['login'])){
    $name=$_POST['user_name'];
    $roll=$_POST['roll_no'];
    $pass=$_POST['password'];

    $connection=mysqli_connect("localhost","root","","inn_pro");
  $query="INSERT INTO user(username,rollno,password) VALUES('$name','$roll','$pass')";
  $query_run=mysqli_query($connection,$query);

  if($query_run){
    ?>
     <div class="text-centre fw-bold">
       <h3>registration successfull.GO to login page</h3>
       <form action="../login/login.php">
      <button class="btn btn-primary">log in</button>
      </form>
     </div>
    <?php
  }
  else{
    echo "not inserted";
  }
}
?>
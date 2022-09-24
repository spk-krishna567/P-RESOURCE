<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <?php include 'includes/links.php';?>
</head>
<body>
    
<div class="container-fluid " style="margin-top:100px !important">
    <div class="col-md-10 offset-md-1">
    <div class="col-md-10 offset-md-1 col-sm-12 pb-5">
         
          <h4 style="font-family: 'Inter', sans-serif;margin:2%;padding:1%;font-weight: 600 !important;" class="text-center"><i class="fa-solid fa-user-check"></i>&nbspregistration</h4>
         <hr class="shadow-lg" style="height:1px !important">
   

      <div class="container col-md-10 mt-5">
      <div class="card shadow p-5">
      <form action="code.php" method="POST"> 
  <div class="mb-3">
    <label for="Email" class="form-label">USER NAME:</label>
    <input type="text" name="user_name" class="form-control shadow   bg-white rounded" id="exampleInputEmail1" aria-describedby="emailHelp" required>

  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">ROLL NO:</label>
    <input type="text" name="roll_no" class="form-control shadow   bg-white rounded" id="exampleInputEmail1" aria-describedby="emailHelp" required>

  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">PASSWORD:</label>
    <input type="password" name="password" class="form-control shadow   bg-white rounded" id="exampleInputPassword1" required>
  </div>
  <br>
  <div class="d-grid gap-2">
  <button type="submit" name="login" class="btn btn-outline-success fw-bold btn-block" style="margin-top:3px !important ">Submit</button>
  </div>
</form>
</div>
      </div>
</div>
  </div>
</div>


</body>
</html>
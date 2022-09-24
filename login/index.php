<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'security.php';?>
    <?php include 'includes/links.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12">
                <h4
                    style="font-family: 'Inter', sans-serif;margin-top:2%;padding:1%;font-weight: 600;color:black !important;">
                    <i class="fa-solid fa-rectangle-list"></i> sources</h4>
                <hr style="background-color:black !important">

            </div>
        </div>
        <!---cards--->
        <?php
            $query="SELECT * FROM sources";
            $query_run=mysqli_query($connection,$query);
            $count=mysqli_num_rows($query_run);
        ?>
        <?php
                        if($count>0){
                            while($row=mysqli_fetch_assoc($query_run)){
                             ?>
        <div class=" col-md-10 offset-md-1 col-sm-12 ">
            <a href="material_detail.php" style="text-decoration:none;color:black !important">
                <div class="card shadow p-3 mb-5 rounded col-md-5">
                    <div class="card-body ">
                        <h4 class="card-title"><?php echo $row['title'];?></h4>
                        <h5 class="text muted">domain:<?php echo $row['domain'];?></h5>
                        <h5 class="text muted">level:<?php echo $row['level'];?></h5>
                        <br>
                        <h6><?php echo $row['discription'];?></h6>
                    </div>
                    <hr style="background-color: rgb(0, 0, 0) !important;height:2px !important;">
                    <div class="column">
                        <div class="col-md-4">
                            <h6>links:<span class="badge  bg-secondary"><?php echo $row['links'];?></span></h6>
                        </div>
                        <div class="col-md-4">
                            <h6>uploaded time:<span class="badge  bg-secondary"><?php echo $row['time'];?></span></h6>
                        </div>
                    </div>
                </div>
            </a>    
        </div>
        <?php
                            }
                        } 
                        else{
                            echo 'no records found';
                        }
                        ?>
</div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
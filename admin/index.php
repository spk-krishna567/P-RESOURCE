<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include 'security.php';?>
    <?php include 'includes/links.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-between">
            <h2>Resources</h2>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary ms-auto" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                File upload
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">source upload</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="code.php" method="POST">
                            <div class="modal-body">

                                <div class="form-group m-2">
                                    <input type="text" class="form-control" name="title" placeholder="title of source">
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" class="form-control" name="domain"
                                        placeholder="Domain of source">
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" class="form-control" name="discription"
                                        placeholder="discription">
                                </div>
                                <div class="input-group m-2">
                                    <div class="input-group-pretend">
                                        <label class="input-group-text">level</label>
                                    </div>
                                    <select name="level" id="" class="form-control">
                                        <option value="">level</option>
                                        <option value="easy">easy</option>
                                        <option value="intermediate">intermediate</option>
                                        <option value="advance">advance</option>
                                    </select>
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" class="form-control" name="links"
                                        placeholder=" place links here">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="upload_info">Upload info</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <?php
    if(isset($_SESSION['status'])){
      echo '<div class="alert alert-success text-center fw-bold" role="alert">'.$_SESSION["status"].'</div>';
      unset($_SESSION['status']);
    }
    ?>
        
        <br>
        <?php
            $query="SELECT * FROM sources";
            $query_run=mysqli_query($connection,$query);
            $count=mysqli_num_rows($query_run);
        ?>
        <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-striped">
                    <thead style="background-color:#6564DB !important">
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                            <th>doamin</th>
                            <th>discription</th>
                            <th>level</th>
                            <th>links</th>
                            <th>upload time</th>
                            <th>Edit</th>
                            <th>update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($count>0){
                            while($row=mysqli_fetch_assoc($query_run)){
                             ?>
                                 <tr>
                                 <td><?php echo $row['source_id'];?></td>
                                 <td><?php echo $row['title'];?></td>
                                 <td><?php echo $row['domain'];?></td>
                                 <td><?php echo $row['discription'];?></td>
                                 <td><?php echo $row['level'];?></td>
                                 <td><?php echo $row['links'];?></td>
                                 <td><?php echo $row['time'];?></td>
                            </tr>
                             <?php
                            }
                        } 
                        else{
                            echo 'no records found';
                        }
                        ?>
                        
                    </tbody>
                </table>

            </div>


    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>REVIEW</title>
        
    </head>
    <body>


<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
           <h1 class="text-center">USER FEEDBACK</h1>
        </div>
    </div>
        <div class="row mt-3">
        <?php
        // connect to db

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "feedback";
        $conn = mysqli_connect($host, $user, $password, $database);
        $results = $conn->query("SELECT * FROM users_site");
        ?>
        
           

            <?php while ($data = $results->fetch_assoc()): ?>
               
            <div class="col-md-3 mt-3">
                 <div class="card">
                   <div class="card-body">
                      <h3 class="card-title" style="text-align:center"><?php echo $data['name'] ?></h3> <hr>
                      <h4 class="card-title">Experience:<?php echo $data['experience'] ?></h4> 
                      <p class="card-text"><?php echo $data['feed'] ?></p>
                  </div>
                </div>
            </div>
                
            <?php endwhile; ?>
    </div>

    </body>
</html>

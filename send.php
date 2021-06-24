<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $experience = $_POST['experience'];
        $feed = $_POST['feed'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "feedback";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
     // Check if the form is submitted
      if ( isset( $_POST['submit'] ) ) {
        header("Location: review.php");
      }
      
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        $sql = "INSERT INTO `users_site` (`name`, `email`, `experience`, `feed` ) VALUES ('$name', '$email', '$experience','$feed')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
         
          echo "<script>alert('Your feedback submitted succesfully')</script>";
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some issue and your entry was not submitted successfully!
          </div>';
        }

      }

    }

    
?>
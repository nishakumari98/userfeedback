<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <!-- BOOTSTRAP CDN Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Jquery links-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/QGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <!-- Custom CSS file -->
       <link rel="stylesheet" href="css/feedbackform.css">
      
    </head>

    <body>
    <div class="loginbox mt-4">
        <section id="form-section">
            <h1 class="h1-tag">Your Feedback Is important For Us</h1>
            <hr>
            <form class="form-content-section" action="send.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputText">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputText" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your email">
                
            </div>
            <h3 class="mt-4">How do you rate your overall experience?</h3>
            <label class="radio-inline"><input type="radio" name="experience" value="Bad">Bad</label>
			<label class="radio-inline"><input type="radio" name="experience" value="Average">Average</label>
			<label class="radio-inline"><input type="radio" name="experience" value="Good">Good</label>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Your Feedback</label>
                <textarea class="form-control" name="feed" id="exampleFormControlTextarea1" placeholder="Write your feedback" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary myclass">Post Comment</button>
        </form>
    </section>
</div>
</body>

</html>
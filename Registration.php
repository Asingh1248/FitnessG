<?php include 'header.html';?>

<!doctype html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="Registration.css">
</head>

<body>
    <div class="container">
            <h1 class="text-success text-center">Registration Form</h1> <!--Imp text-white bg-dark--> 
        <div class="row">
            
            <div class="col-md-5 m-auto d-block">
                <form action="signup.php" onsubmit="return Validate()" class="bg-light" id="email_form" method="POST"> <!--imp-->
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" class="form-control" id="email" required autocomplete="off" name="email1"> <!--Imp required-->
                         <span id="Message" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" required autocomplete="off">
                        <span id="password" class="text-danger font-weight-bold"></span> 
                    </div>
                    <div class="form-group">
                        <label for="Con_Pwd">Confirm Password</label>
                        <input type="password" class="form-control" id="con_pwd" required autocomplete="off" name="password1">
                        <span id="ConfirmPassword" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="Registration.js"></script>
</body>

</html>
<?php include 'footer1.html';?>

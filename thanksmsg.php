<?php

session_start();
$name = $_SESSION['name'];
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Thank You</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="css/thanks.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
    </head>
  <body>
        <div class="">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row text-center">
                <div class="pt-5 pb-3 px-4 d-lg-block d-none text-center" style="background-color: white;border-radius: 10px;">
                  <?php echo "<h4 style=font-weight: 600;><b> Congratulations,</b>$name <br>Your registration is complete.</h4>";?><br>
                </div>
                <div class="pt-5 pb-3 px-3 d-lg-none d-block text-center" style="background-color: white;border-radius: 10px;">
                  <?php echo "<p style=font-weight: 600;font-size:4vw;><b> Congratulations,</b> $name <br>Your registration is complete.</p>";?><br>
                </div>
            </div>
            <!-- <br> -->
            <div class="row text-center">
            <!-- <a href="rules.php">Click Here </a> to proceed for payment! -->
            </div>
        </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success | Data Saved</title>

    <link rel="shortcut icon" href="https://img.icons8.com/color/48/000000/ok.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        .full-screen {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    
    <header id="header">
        <div class="full-screen d-flex justify-content-center align-items-center">
            <div class="text-center">
            <div class="">
            <img src="https://img.icons8.com/officel/80/000000/realtime-protection.png"/>
            </div>
                <h2 class="display-1 text-success d-block font-weight-bolder">Data Saved...</h2>
                <p class="d-block lead text-dark font-weight-bolder">You will be redirected to <a href="index.php">signup</a> page within 5 seconds <span class="text-danger">Please do not refresh...</span></p>
            </div>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
         setTimeout(() => {
            window.location.href = "index.php"
        }, 5000);
    </script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>User Profile</title>
  </head>
  <body>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1>User Profile Page</h1>
            <?php if(isset($_SESSION['success'])) {?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
            <?php 
            } ?>
            HELLO, <?php echo $_SESSION['name']; ?>
            <br><br>
            <a href="<?php echo base_url(); ?>auth/logout">Logout</a>
        </div>
        <div class="col-lg-3"></div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
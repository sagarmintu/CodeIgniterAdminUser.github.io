<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Login</title>
  </head>
  <body>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1>Login Page</h1>
            <?php if(isset($_SESSION['success'])) {?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
            <?php 
            } ?>
            <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div>
                    <button class="btn btn-outline-primary" name="login">Login</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
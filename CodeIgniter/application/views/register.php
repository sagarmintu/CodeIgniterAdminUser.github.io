<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Registration</title>
  </head>
  <body>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1>Register Page</h1>
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
                <div class="form-group">
                    <label for="CPassword">Confirm Password</label>
                    <input class="form-control" type="password" name="cpassword" id="password">
                </div>
                <div class="form-group">
                    <label for="Department">Department</label>
                    <select class="form-control" name="dept_id" id="dept_id">
                        <option value="">Select</option>
                        <option value="1">mechanical</option>
                        <option value="2">electronics</option>
                        <option value="3">computer</option>
                        <option value="4">IT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Salary">Salary</label>
                    <input class="form-control" type="text" name="salary" id="salary">
                </div>
                <div class="form-group">
                    <label for="Designation">Designation</label>
                    <input class="form-control" type="text" name="designation" id="designation">
                </div>
                <div class="form-group">
                    <label for="Employee_Type">Employee Type</label>
                    <select class="form-control" name="employee_type" id="employee_type">
                        <option value="">Select</option>
                        <option value="1">Admin</option>
                        <option value="2">Employee</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div>
                    <button class="btn btn-outline-primary" name="register">Register</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
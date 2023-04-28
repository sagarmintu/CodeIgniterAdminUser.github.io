<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Create User</title>
  </head>
  <body>

    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">CRUD APPLICATION</a>
        </div>
    </div>
    <div class="conatainer">
        <form action="" method="POST">
            <h1 class="text-center">Create User</h1>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="Salary">Salary</label>
                        <input class="form-control" type="text" name="salary" id="salary">
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
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Create</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
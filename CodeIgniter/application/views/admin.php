<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title>Admin Profile</title>
  </head>
  <body>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1>Admin Profile Page</h1>
            <?php if(isset($_SESSION['success'])) {?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
            <?php 
            } ?>
            HELLO, <?php echo $_SESSION['name']; ?>
            <br><br>
            <a href="<?php echo base_url(); ?>auth/logout">Logout</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Department Name</th>
                        <th scope="col">Designation</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($result)) {
                    $cnt=1;
                    foreach ($result as $row){
                    ?>
                    <tr>
                        <td><?php echo htmlentities($cnt);?></td>
                        <td><?php echo htmlentities($row->name)?></td>
                        <td><?php echo htmlentities($row->email)?></td>
                        <td><?php echo htmlentities($row->salary)?></td>
                        <td><?php echo htmlentities($row->dept_name)?></td>
                        <td><?php echo htmlentities($row->designation)?></td>
                    </tr>
                    <?php
                    $cnt++;
                    } 
                    } else { ?>
                    <tr>
                    <td colspan="7">No Record found</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3"></div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
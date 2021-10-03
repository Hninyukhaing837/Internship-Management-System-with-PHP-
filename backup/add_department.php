<?php include "includes/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 py-5">
            <p class="h2">Add Deparment</p>
            <?php
              if (isset($_POST['submit'])) {
                $d_name = $_POST['d_name'];
                $c_name = $_POST['s_name'];

                if (empty($d_name) || empty($c_name)) {
                    echo '<div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Please Type Input! </strong>
                      </div>';
                }else {
                $code = sha1(time(). rand(1, 1000));
                $sql = "INSERT INTO department(d_name, d_shortname, d_coad) VALUES ('$d_name', '$c_name', '$code')";
                $query = mysqli_query($con,$sql);
                if ($query) {
                  echo '<div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong>
                  </div>';
                }
              }

              }

             ?>
            <form method="post">
                <div class="form-group">
                    <label>Deparment Name</label>
                    <input type="text" name="d_name" class="form-control" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                    <label>Short Name</label>
                    <input type="text" name="s_name" class="form-control" autocomplete="off">
                </div>
                <br>

                <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary border-primary">
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>

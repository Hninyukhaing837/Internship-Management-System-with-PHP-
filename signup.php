<?php include "includes/head.php" ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 m-auto p-5">
            <p class="h2">User Register</p>

            <?php



            if (isset($_POST["reg"])){
                function check($in){
                    $in = trim($in);
                    $in = stripcslashes($in);
                    $in = htmlentities($in, ENT_QUOTES);
                    return $in;
                }
                $name = check($_POST['name']);
                $uname = check($_POST['uname']);
                $pass = check($_POST['pass']);
                $cpass = check($_POST['cpass']);
                $email = check($_POST['email']);
                $phone = check($_POST['phone']);
                $address = check($_POST['address']);
                $type = check($_POST['type']);
                if ($type == 2){
                    $dept = check($_POST['dept']);
                    $roll = check($_POST['roll']);
                    $gender = check($_POST['gender']);
                }else if($type == 3){
                    $cname = check($_POST['cname']);
                }else{
                    echo "there is no user type";
                    die();
                }

                if ($pass == $cpass){
                    $password = password_hash($pass, PASSWORD_DEFAULT);

                    if ($type == 2) {
                        $sql = "INSERT INTO user ( u_name, u_uname, u_password, u_role, u_email, u_menu, u_gender, u_roll, u_phone, u_address)
                        VALUES ( '$name', '$uname', '$password', '$type', '$email', '$dept', '$gender', '$roll', '$phone', '$address')";
                    }else if($type ==3){
                        $sql = "INSERT INTO user ( u_name, u_uname, u_password, u_role, u_email, u_company , u_phone, u_address)
                        VALUES ( '$name', '$uname', '$password', '$type', '$email', '$cname', '$phone', '$address')";
                    }

                    if(mysqli_query($con,$sql)){
                        header("location:login.php");
                    }else{
                        echo "user db input fail";
                    }
                   
                    
                }else{
                    echo "Password and confirm password are not same.";
                }




            }

            ?>
   
            <form method="post">
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="uname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>User Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" minlength="6" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" class="form-control" minlength="6" required>
                </div>
                <div class="form-group">
                    <label>User Type</label><br>
                    <label for="student">Student</label>
                    <input type="radio" name="type" value="2" id="student" required>
                    <label for="company">Company</label>
                    <input type="radio" name="type" value="3" id="company" required>
                </div>
                <div class="student" style="display: none;">

                <div class="form-group">
                    <label>Your Department</label>
                    <select name="dept" class="form-control" >
                         <?php 

                                $sql = "SELECT * FROM menu WHERE m_status=1";
                                $query = mysqli_query($con,$sql);
                                while($menu = mysqli_fetch_assoc($query)){
                               ?>                             
                                <option value="<?php echo $menu['m_code'] ?>">
                                    <?php echo $menu["m_name"] ?>                                       
                                </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Roll Number</label>
                    <input type="text" name="roll" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Gender</label><br>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="male" id="male" >
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="female" id="female" >
                </div>
                </div>
                <div class="company" style="display: none;">
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" name="cname" class="form-control" >
                </div>
                </div>
                <div class="form-group">
                    <label>Your Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Your Address</label>
                    <textarea type="text" name="address" class="form-control"  rows="5" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="reg" value="Sign Up" class="btn btn-info border-primary" required>
                </div>
                <br>
            </form>
            <script>
                $("#student").click(function(){
                    $(".student").show();
                    $(".company").hide();
                });
                $("#company").click(function(){
                    $(".company").show();
                    $(".student").hide();
                });
            </script>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>

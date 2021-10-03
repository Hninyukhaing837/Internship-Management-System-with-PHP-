<?php
session_start();
if (isset($_SESSION['name'])) {
    session_unset();
    session_destroy();
}

?>
<?php include "includes/base.php" ?>
<?php include "includes/header.php" ?>
<?php

function text_filter($in){
    $in = trim($in);
    $in = stripcslashes($in);
    $in = htmlentities($in, ENT_QUOTES);
    return $in;
}

if(isset($_POST["login"])){
    if (empty($_POST["uname"]) || empty($_POST["pass"])) {
        echo "please fill all inputs....";
    }else{
        $uname = text_filter($_POST["uname"]);
        $pass = text_filter($_POST["pass"]);
        $sql = "SELECT * FROM user WHERE u_uname='$uname'";
        $query = mysqli_query($con,$sql);
        if($user = mysqli_fetch_assoc($query)){

            if (!password_verify($pass,$user["u_password"])) {
                echo "password wrong";
            }else{

                $_SESSION["name"] = $user["u_name"];
                $_SESSION["uname"] = $user["u_uname"];
                $_SESSION["password"] = $user["u_password"];
                $_SESSION["role"] = $user["u_role"];

                header("location:index.php");

            }

        }else{
            echo "User Name Or Password are wrong.....";
        }

    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-4 m-auto py-5">
            <p class="h2">Login Form</p>
            <form method="post">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="uname" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="login" value="login" class="btn btn-primary border-primary">
                    <a href="signup.php" class="btn btn-info">Sing Up</a>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
<?php include "includes/footer.php" ?>


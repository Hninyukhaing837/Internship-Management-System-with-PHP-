<?php
/**
 * Created by PhpStorm.
 * User: Ko Htet
 * Date: 7/6/2018
 * Time: 7:25 PM
 */

if(!isset($_SESSION["name"])){
    echo "<script>location.href='http://localhost/ims/login.php'</script>";
}
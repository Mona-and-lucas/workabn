<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.inc";
?>
<body>
<?php
include_once "nav.inc";
?>
<?php
session_start();
$message="";
if(count($_POST)>0) {
    // $con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
    require_once "settings.php";
    $con = mysqli_connect($host, $user, $pwd, $sql_db);
    $result = mysqli_query($con,"SELECT * FROM USER WHERE EMAIL='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {

        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["email"])) {
    header("Location:result.php");
}
?>
<form name="frmUser" method="post" action="" align="center">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <div class="card">
        <div class="card-body">
            <br><br><br>
            <h2 class="card-title">Please Enter Login Details</h2>
            <br>
            <br>
            <br>
            <div class="container col-lg-12">
                <div class="row">
                    <div>
                        <h4 class="card-text">Email:</h4><br>
                        <input type="text" name="email" class="form-control" placeholder="please type in your email">
                    </div>
                    <div>
                        <h4 class="card-text">Password:</h4><br>
                        <input type="password" name="password" class="form-control" placeholder="please type in your password">
                    </div>
                </div>
            </div>
            <br><br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <input type="reset" class="btn btn-light">
        </div>
    </div>
</form>
<a href="registration.php" class="btn btn-success">Register here</a>
<br><br><br>
<?php
include_once "footer.inc";
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.inc";
?>
<?php
include_once "nav.inc";
?>
<body>
<form name="frmUser" method="post" action="process_login_new.php" align="center">
<!--    <div class="message">--><?php //if($message!="") { echo $message; } ?><!--</div>-->
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
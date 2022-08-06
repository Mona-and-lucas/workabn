<?php
include_once "head.inc";
?>
    <body>
<?php
include_once "nav.inc";
?>
<?php

require_once("settings.php");
$conn = mysqli_connect($host, $user, $pwd, $sql_db);
if(isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_POST['email'];
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($conn, $email);
    $password = $_POST['password'];
    $password = stripcslashes($password);
    $password = mysqli_real_escape_string($conn, $password);

    if (!$conn) {
        echo "<p>Connection is failed.</p>";
    } else {
        $sql = "SELECT * FROM USER WHERE EMAIL='$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            header("Location:result.php");
        } else {
            $message = "Invalid Username or Password!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Creating Web Application Lab 09" />
    <meta name="keyword" content="PHP, Mysql" />
    <title>Retrieving records to HTML</title>
</head>
<body>

<?php
// redirect if accesss by url
if(!isset($_POST["email"])) {
    header("location:index.php");
    exit();
}
require_once ("settings.php");
$conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
);
if(!$conn) {
    echo "<p>Database connection failure</p>";

} else {
    $sql_table="user";
    $user_name = htmlspecialchars($_POST["user_name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $query = "INSERT INTO $sql_table (user_name, email, password) values ('$user_name','$email','$password')";

    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo "<p class=\'wrong\'>Something is wrong with ", $query, "</p>";
    } else {
        echo "<p class=\"ok\">Successfully register</p>";
        echo '<a href="login.php" class="btn btn-success">Login now</a>';
    }

    mysqli_close($conn);
}
?>
</body>
</html>

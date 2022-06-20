<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Make Business Simple</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <?php
        if (!isset($_POST["email"])) {
        			header ("location: index.php");
        			exit();
        		}
        else {
            $err_msg="";
            function sanitise_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            // validate-name
            $fullname = sanitise_input($_POST["fullname"]);
            if ($fullname=="")
                $err_msg .= "<p>Please enter your name.</p>";
            else if (!preg_match("/^[a-zA-Z]{2,20}$/",$fullname))
                $err_msg .= "<p>Name only contains letters between 2 to 20.</p>";
            // email
            $email = $_POST["email"];

                if (trim($email) == "")
                    $err_msg .= "<p>Please enter email.</p>";
                else {
                    $email =  sanitise_input($email);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                    $err_msg .= "<p>Email is not valid.</p>";
                }
            //question detail
            $question= sanitise_input($_POST["question"]);
            if ($question=="")
                $err_msg .= "<p>Please write some questions.</p>";
            else if (!preg_match("/^[\.a-zA-Z0-9,!? ]*$/",$question))
                $err_msg .= "<p>Question should only contains up to 250 characters.</p>";
            }

            // connect to db, create table and insert record
            require_once("settings.php");
            $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

            if(!$conn) {
                echo "<p>Connection is failed.</p>";
            }
            else {
                $sql_table = "enquiry";
                $insert_query = "INSERT INTO enquiry (fullname, email, question)
                    VALUES ('$fullname','$email','$question')";
                $result = mysqli_query($conn, $insert_query);
                if ($result)
                    echo "<p>Successfully Submit Application. Your applicant id is " . mysqli_insert_id($conn) . ". </p>";
                else
                    echo "<p>Failed to insert.</p>";

                mysqli_close($conn);
            }
        ?>
    </body>
</html>
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
            if (!isset($_POST["firstName"])) {
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
                $firstName = sanitise_input($_POST["firstName"]);
                if ($firstName=="")
                    $err_msg .= "<p>Please enter your first name.</p>";
                else if (!preg_match("/^[a-zA-Z]{2,20}$/",$firstName))
                    $err_msg .= "<p>Name only contains letters between 2 to 20.</p>";

                $middleName = sanitise_input($_POST["middleName"]);
                if (!preg_match("/^[a-zA-Z]{2,20}$/",$firstName))
                    $err_msg .= "<p>Middle name only contains letters between 2 to 20.</p>";

                $lastName = sanitise_input($_POST["lastName"]);
                if ($firstName=="")
                    $err_msg .= "<p>Please enter your last name.</p>";
                else if (!preg_match("/^[a-zA-Z]{2,20}$/",$firstName))
                    $err_msg .= "<p>Last name only contains letters between 2 to 20.</p>";

                // email
                $email_first = sanitise_input($_POST["email_first"]);
                $email_second = sanitise_input($_POST["email_second"]);
                if (trim($email_first) == "")
                    $err_msg .= "<p>Please enter email.</p>";
                else {
                    $email =  sanitise_input($email_first);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                        $err_msg .= "<p>Email is not valid.</p>";
                }

                if (trim($email_second != $email_first)){
                    $err_msg .= "<p>Please make sure you entre correct email address</p>";
                }
                //business details
                $abn = sanitise_input($_POST["abn"]);
                if (!preg_match("/^[0-9]{11}$/",$abn))
                    $err_msg .= "<p>ABN number contains 11 digits.</p>";


                $tfn = sanitise_input($_POST["tfn"]);
                if (!preg_match("/^[0-9]{9}$/",$tfn))
                    $err_msg .= "<p>TFN number contains 9 digits.</p>";

                $phoneNo = sanitise_input($_POST["phoneNo"]);
                if (trim($phoneNo) == ""){
                    $err_msg .= "<p>Please enter phone number.</p>";
                } else if (!preg_match("/^[0-9\s]{8,12}$/",$tfn)) {
                    $err_msg .= "<p>Phone number contains maximum of 11 digits.</p>";
                }

                $person_address = sanitise_input($_POST["person_address"]);
                if (trim($person_address) == ""){
                    $err_msg .= "<p>Please enter your residential address.</p>";
                } else if (!preg_match("/^[\.a-zA-Z0-9,]*$/",$person_address)) {
                    $err_msg .= "<p>Address must only contain characters, number, comma and period.</p>";
                }

                $person_state = sanitise_input($_POST["person_state"]);
                if (trim($person_state) == ""){
                    $err_msg .= "<p>Please enter the state your are living.</p>";
                } else if (!preg_match("/^[a-zA-Z]{3,10}$/",$person_state)) {
                    $err_msg .= "<p>State name must only contain characters between 3 and 10.</p>";
                }

                $person_city = sanitise_input($_POST["person_city"]);
                if (trim($person_city) == ""){
                    $err_msg .= "<p>Please enter the city your are living.</p>";
                } else if (!preg_match("/^[a-zA-Z]{3,15}$/",$person_city)) {
                    $err_msg .= "<p>City name must only contain characters between 3 and 15.</p>";
                }
                $person_zip = sanitise_input($_POST["person_zip"]);
                if (trim($person_zip) == ""){
                    $err_msg .= "<p>Please enter your postal code.</p>";
                } else if (!preg_match("/^[0-9\s]{4}$/",$person_zip)) {
                    $err_msg .= "<p>Postal code should only contain 4 digits</p>";
                }

                $activity = sanitise_input($_POST["activity"]);
                if (trim($activity) == ""){
                    $err_msg .= "<p>Please enter your business activity.</p>";
                } else if (!preg_match("/^[a-zA-Z]{2-30}*$/",$activity)) {
                    $err_msg .= "<p>Business activity should only contain letters, length should be less than 30.</p>";
                }

                $businessName = sanitise_input($_POST["businessName"]);
                if (!preg_match("/^[a-zA-Z0-9]{2-30}$/",$businessName)) {
                    $err_msg .= "<p>Business name should only contain letters and numbers, length should be less than 30.</p>";
                }

                if (!isset($_POST["birthday_day"]))
                    $err_msg .= "<p>Please select your birthday date.</p>";
                else {
                    $birthday_day=sanitise_input($_POST["birthday_day"]);
                }

                if (!isset($_POST["birthday_month"]))
                    $err_msg .= "<p>Please select your birthday month.</p>";
                else {
                    $birthday_month=sanitise_input($_POST["birthday_month"]);
                }

                if (!isset($_POST["birthday_year"]))
                    $err_msg .= "<p>Please select your birthday year.</p>";
                else {
                    $birthday_year=sanitise_input($_POST["birthday_year"]);
                }
                if (!isset($_POST["person_state"]))
                    $err_msg .= "<p>Please select your state.</p>";
                else {
                    $person_state=sanitise_input($_POST["person_state"]);
                }

                if (!isset($_POST["startAt_day"]))
                    $err_msg .= "<p>Please select a day to start your ABN.</p>";
                else {
                    $startAt_day=sanitise_input($_POST["startAt_day"]);
                }

                if (!isset($_POST["startAt_month"]))
                    $err_msg .= "<p>Please select a month to start your ABN.</p>";
                else {
                    $startAt_month=sanitise_input($_POST["startAt_month"]);
                }

                if (!isset($_POST["startAt_year"]))
                    $err_msg .= "<p>Please select a year to start your ABN.</p>";
                else {
                    $startAt_year=sanitise_input($_POST["startAt_year"]);
                }
                if (!isset($_POST["firstTime"]))
                    $err_msg .= "<p>Please tell us if this is the first time in business in Australia.</p>";
                else {
                    $firstTime=sanitise_input($_POST["firstTime"]);
                }
                if (!isset($_POST["needBusinessName"]))
                    $err_msg .= "<p>Please tell us do you need business name.</p>";
                else {
                    $needBusinessName=sanitise_input($_POST["needBusinessName"]);
                }

                if (!isset($_POST["period"]))
                    $err_msg .= "<p>Please select the period of registration.</p>";
                else {
                    $period=sanitise_input($_POST["period"]);
                }
                if (!isset($_POST["type"]))
                    $err_msg .= "<p>Please tell us what type of ABN do you apply.</p>";
                else {
                    $type=sanitise_input($_POST["type"]);
                }
                if (!isset($_POST["birthLocation"]))
                    $err_msg .= "<p>Please tell us where do you born.</p>";
                else {
                    $birthLocation=sanitise_input($_POST["birthLocation"]);
                }
                if (!isset($_POST["states"]))
                    $err_msg .= "<p>Please tell us which state were you born.</p>";
                else {
                    $states=sanitise_input($_POST["states"]);
                }
                if (!isset($_POST["suburb"]))
                    $err_msg .= "<p>Please tell us which city or town do you born.</p>";
                else {
                    $suburb=sanitise_input($_POST["suburb"]);
                }
                if (!isset($_POST["needGST"]))
                    $err_msg .= "<p>Please tell us do you need GST.</p>";
                else {
                    $needGST=sanitise_input($_POST["needGST"]);
                }
                if (!isset($_POST["GST_annual"]))
                    $err_msg .= "<p>Please tell us your expected annual turnover.</p>";
                else {
                    $GST_annual=sanitise_input($_POST["GST_annual"]);
                }
                if (!isset($_POST["GST_companyLodge"]))
                    $err_msg .= "<p>Please tell us how often the company lodge GST.</p>";
                else {
                    $GST_companyLodge=sanitise_input($_POST["GST_companyLodge"]);
                }
                if (!isset($_POST["GST_cashBasis"]))
                    $err_msg .= "<p>Please tell us if the company intend to account for GST on a cash basis.</p>";
                else {
                    $GST_cashBasis=sanitise_input($_POST["GST_cashBasis"]);
                }
                if (!isset($_POST["GST_import"]))
                    $err_msg .= "<p>Please tell us do you import goods and services into Australia.</p>";
                else {
                    $GST_import=sanitise_input($_POST["GST_import"]);
                }
                if (!isset($_POST["GST_startAt_day"]))
                    $err_msg .= "<p>Please tell us which day do you want to start your GST.</p>";
                else {
                    $GST_startAt_day=sanitise_input($_POST["GST_startAt_day"]);
                }
                if (!isset($_POST["GST_startAt_month"]))
                    $err_msg .= "<p>Please tell us which month do you want to start your GST.</p>";
                else {
                    $GST_startAt_month=sanitise_input($_POST["GST_startAt_month"]);
                }
                if (!isset($_POST["GST_startAt_year"]))
                    $err_msg .= "<p>Please tell us which year do you want to start your GST.</p>";
                else {
                    $GST_startAt_year=sanitise_input($_POST["GST_startAt_year"]);
                }
                if (!isset($_POST["soleTrader"]))
                    $err_msg .= "<p>Please select the reason on applying ABN.</p>";
                else {
                    $soleTrader=sanitise_input($_POST["soleTrader"]);
                }
            }

            // connect to db, create table and insert record
            require_once("settings.php");
            $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

            if(!$conn) {
                echo "<p>Connection is failed.</p>";
            }
            else {
                $sql_table = "application";
                $insert_query = "INSERT INTO application (
                     firstName, middleName, lastName, email, abn, tfn, phoneNo, birthday_day, 
                     birthday_month, birthday_year,person_address, person_state, person_city, 
                     person_zip, startAt_day, startAt_month, startAt_year, activity, soleTrader, 
                     firstTime, needBusinessName,period, type, businessName, birthLocation, state, 
                     suburb, needGST, GST_annual, GST_companyLodge, GST_cashBasis, GST_import, 
                     GST_startAt_day, GST_startAt_month, GST_startAt_year)
                                VALUES (
                                        '$firstName','$middleName','$lastName','$email_first','$abn','$tfn','$phoneNo','$birthday_day',
                                        '$birthday_month','$birthday_year','$person_address','$person_state','$person_city','$person_zip',
                                        '$startAt_day','$startAt_month','$startAt_year','$activity','$soleTrader','$firstTime','$needBusinessName',
                                        '$period','$type','$businessName','$birthLocation','$states','$suburb','$needGST','$GST_annual','$GST_companyLodge',
                                        '$GST_cashBasis','$GST_import','$GST_startAt_day','$GST_startAt_month','$GST_startAt_year'
                                        )";
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
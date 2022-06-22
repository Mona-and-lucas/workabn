<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once "head.inc";
?>
<body id="manage">
<?php
include_once "nav.inc";
?>
<?php
if($_SESSION["email"]) {
    ?>
    <br><br><br><br>Welcome back,  <?php echo $_SESSION["email"]; ?>. <br>Click here to <a href="logout.php" tite="Logout" class="btn btn-danger">Logout.</a>

    <div class="jumbotron">
        <?php
        // if(!isset($_POST["firstName"])) {
        // 	header("location:apply.php");
        // 	exit();
        // }
        if (!isset($_POST["firstName"]))
            $query = "SELECT * FROM application";
        else {
            $fn=$_POST["firstName"];
            $ln=$_POST["lastName"];
            $query = "SELECT * FROM application 
                WHERE firstName LIKE '%$fn%' AND lastName LIKE '%$ln%'";
        }
        require_once "settings.php";
        $conn = mysqli_connect($host, $user, $pwd, $sql_db);
        if ($conn) {

            echo "<p>The Database has been Connected successfully!</p>";
            echo "<br>";
            echo "<br>";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<h3>Administration Interface</h3>";
                $record = mysqli_fetch_assoc ($result);
                if ($record) {
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "<th scope=\"col\">ID</th>";
                    echo "<th scope=\"col\">firstName</th>";
                    echo "<th scope=\"col\">middleName</th>";
                    echo "<th>lastName</th>";
                    echo "<th>email</th>";
                    echo "<th>abn</th>";
                    echo "<th>tfn</th>";
                    echo "<th>phoneNo</th>";
                    echo "<th>birthday_day</th>";
                    echo "<th>birthday_month</th>";
                    echo "<th>birthday_year</th>";
                    echo "<th>person_address</th>";
                    echo "<th>person_state</th>";
                    echo "<th>person_city</th>";
                    echo "<th>person_zip</th>";

                    echo "<th>startAt_day</th>";
                    echo "<th>startAt_month</th>";
                    echo "<th>startAt_year</th>";
                    echo "<th>activity</th>";
                    echo "<th>soleTrader</th>";
                    echo "<th>firstTime</th>";
                    echo "<th>needBusinessName</th>";
                    echo "<th>period</th>";
                    echo "<th>type</th>";
                    echo "<th>businessName</th>";
                    echo "<th>birthLocation</th>";
                    echo "<th>state</th>";
                    echo "<th>suburb</th>";
                    echo "<th>needGST</th>";
                    echo "<th>GST_annual</th>";
                    echo "<th>GST_companyLodge</th>";
                    echo "<th>GST_cashBasis</th>";
                    echo "<th>GST_import</th>";
                    echo "<th>GST_startAt_day</th>";
                    echo "<th>GST_startAt_month</th>";
                    echo "<th>GST_startAt_year</th>";
                    echo "</tr>";


                    while ($record) {
                        echo "<tr>";
                        echo "<td>{$record['id']}</td>";
                        echo "<td>{$record['firstName']}</td>";
                        echo "<td>{$record['middleName']}</td>";
                        echo "<td>{$record['lastName']}</td>";
                        echo "<td>{$record['email']}</td>";
                        echo "<td>{$record['abn']}</td>";
                        echo "<td>{$record['tfn']}</td>";
                        echo "<td>{$record['phoneNo']}</td>";
                        echo "<td>{$record['birthday_day']}</td>";
                        echo "<td>{$record['birthday_month']}</td>";
                        echo "<td>{$record['birthday_year']}</td>";
                        echo "<td>{$record['person_address']}</td>";
                        echo "<td>{$record['person_state']}</td>";
                        echo "<td>{$record['person_city']}</td>";
                        echo "<td>{$record['person_zip']}</td>";

                        echo "<td>{$record['startAt_day']}</td>";
                        echo "<td>{$record['startAt_month']}</td>";
                        echo "<td>{$record['startAt_year']}</td>";
                        echo "<td>{$record['activity']}</td>";
                        echo "<td>{$record['soleTrader']}</td>";
                        echo "<td>{$record['firstTime']}</td>";
                        echo "<td>{$record['needBusinessName']}</td>";
                        echo "<td>{$record['period']}</td>";
                        echo "<td>{$record['type']}</td>";
                        echo "<td>{$record['businessName']}</td>";
                        echo "<td>{$record['birthLocation']}</td>";
                        echo "<td>{$record['suburb']}</td>";
                        echo "<td>{$record['needGST']}</td>";
                        echo "<td>{$record['GST_annual']}</td>";
                        echo "<td>{$record['GST_companyLodge']}</td>";
                        echo "<td>{$record['GST_cashBasis']}</td>";
                        echo "<td>{$record['GST_import']}</td>";
                        echo "<td>{$record['GST_startAt_day']}</td>";
                        echo "<td>{$record['GST_startAt_month']}</td>";
                        echo "<td>{$record['GST_startAt_year']}</td>";
                        echo"</tr>";
                        $record = mysqli_fetch_assoc ($result);

                    }
                    echo "</table>";
                    mysqli_free_result($result);
                }
                else
                    echo "<p>No record in the application table.</p>";
            }
            else {
                echo "<p>Select Unsuccessfull.</p>";
            }
            mysqli_close($conn);
        }
        else {
            echo "<p>Connection Failed!</p>";
        }

        ?>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Search based on name</h3>
        </div>
        <form action="searchResult.php" method="post">
            <p><label>First Name: <input type="text" name="firstname" /></label></p>
            <p><label>Last Name: <input type="text" name="lastName" /></label></p>
            <input type="submit" value='Search' class="btn btn-success"/>
        </form>
    </div>
    <br>
    <br>
    <?php
}else {
    echo "<h3>Please login first.</h3>";
    echo '<a href="login.php">Login</a>';
    header("location:login.php");
    exit();
}
?>
<?php
include_once "footer.inc";
?>
</body>
</html>
<?php
// Include the configuration file
require_once 'config.php';

// Include the database connection file
require_once 'dbConnect.php';

$payment_id = $statusMsg = '';
$status = 'error';

// Check whether the payment ID is not empty
if(!empty($_GET['pid'])){
    $payment_id  = base64_decode($_GET['pid']);

    // Fetch transaction info from the database
    $sqlQ = "SELECT * FROM transactions WHERE id = ?";
    $stmt = $db->prepare($sqlQ);
    $stmt->bind_param("i", $db_id);
    $db_id = $payment_id;
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        // Transaction details
        $transData = $result->fetch_assoc();
        $transactionID = $transData['txn_id'];
        $paidAmount = $transData['paid_amount'];
        $paidCurrency = $transData['paid_amount_currency'];
        $payment_status = $transData['payment_status'];

        $customerName = $transData['customer_name'];
        $customerEmail = $transData['customer_email'];

        $status = 'success';
        $statusMsg = 'Your Payment has been Successful!';
    }else{
        $statusMsg = "Transaction has been failed!";
    }
}else{
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en-AU">
    <head>
        <title>Stripe Payment Status</title>
        <meta charset="utf-8">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
    <?php
    include_once "nav.inc";
    ?>
        <div class="container">
            <div class="status card text-center">
                <?php if(!empty($payment_id)){ ?>
                    <h1 class="<?php echo $status; ?> status-title"><?php echo $statusMsg; ?></h1>
                    <br>
                    <p>Your application will be processed within 1 business day, should you have any question, please feel free to contact us by <b id="email-contact">enquiry@workabn.com.au</b>, our lovely staffs will get back to you shortly.</p>
                    <div class="card-header">Payment Information</div>
                    <br>
                    <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
                    <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
                    <p><b>Paid Amount:</b> <?php echo $paidCurrency.' '.$paidAmount; ?></p>
                    <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
                    <br>
                    <div class="card-header">Customer Information</div>
                    <br>
                    <p><b>Name:</b> <?php echo $customerName; ?></p>
                    <p><b>Email:</b> <?php echo $customerEmail; ?></p>

                    <div class="card-header">Product Information</div>
                    <br>
                    <p><b>Name:</b> <?php echo $itemName; ?></p>
                    <p><b>Price:</b> <?php echo $itemPrice.' '.$currency; ?></p>
                <?php }else{ ?>
                    <h1 class="error">Your Payment been failed!</h1>
                    <p class="error"><?php echo $statusMsg; ?></p>
                <?php } ?>
                <form action="index.php"><button class="btn btn-success" type="submit">Return to home page</button> </form>
            </div>
        </div>
        <?php
        include_once "footer.inc";
        ?>
    </body>
</html>

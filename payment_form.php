<?php
session_start();
?>
<?php
// Include configuration file
require_once 'config.php';
?>
    <!DOCTYPE html>
    <html lang="en">
<?php
include_once "head.inc";
?>
    <body id="page-top">
<?php
include_once "nav.inc";
?>

<div class="panel">
    <div class="panel-heading">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="paymentHeading" class="col-lg-3 col-md-4 col-sm-10 col-xs-12">
            <h3 class="panel-title">Using Stripe for paying <b class="priceTag"><?php echo '$'.$itemPrice; ?> </b></h3>
            <br>
            <!-- Product Info -->
            <div><b>Item Name:</b> <p class="priceTag"><?php echo $itemName; ?></p></div>
            <div><b>Price:</b> <p class="priceTag"><?php echo '$'.$itemPrice.' '.$currency; ?></p></div>
        </div>
    </div>
    <div class="panel-body">
        <!-- Display status message -->
        <div id="paymentResponse card text_center col-lg-4" class="hidden">
            <div class="card-header"><h3 class="text-center">Payment</h3></div>
            <br>
                <!-- Display a payment form -->
                <form id="paymentFrm" class="hidden form col-lg-3 col-md-4 col-sm-10 col-xs-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" class="field" placeholder="Enter email" required="">
                    </div>
                    <br>

                    <div id="paymentElement">
                        <!--Stripe.js injects the Payment Element-->
                    </div>
                    <br>
                    <!-- Form submit button -->
                    <button id="submitBtn" class="btn btn-success">
                        <div class="spinner hidden" id="spinner"></div>

                        <span id="buttonText">Pay Now</span>
                    </button>
                </form>

                <!-- Display processing notification -->
                <div id="frmProcess" class="hidden">
                    <span class="ring"></span> Processing...
                </div>

                <!-- Display re-initiate button -->
            <br>
                <div id="payReinit" class="hidden">
                    <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
                </div>
    </div>
</div>

<?php
include_once "footer.inc";
?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/checkout.js" STRIPE_PUBLISHABLE_KEY="<?php echo STRIPE_PUBLISHABLE_KEY; ?>" defer></script>
    </body>
</html>

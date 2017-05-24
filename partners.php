<!DOCTYPE html>

<html>

<head>
    <title>Partners</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners</title>
    <?php
        include('/imports.html');
    ?>
</head>

<body>

    <?php
        include('/header.php');
    ?>

        <div class="partnerContainer">
            <div class="partnerDivInnerContainer">
                <?php
                include('showPartners.php');
                ?>
            </div>
        </div>
        <div id="partnerContactDiv">
            <h1>WANT TO BE OUR PARTNER?</h1>
            <!--<button type="button" id="contactBtn" class="btn btn-primary">CONTACT US</button>-->
            <a onclick="myFunction()" class="button"><span class="symbol" >&#9993;</span>Contact Us</a>
        </div>
        <?php
        include('footer.php');
        ?>
<script>
    function myFunction() {
        var x;
        var email = prompt("Please enter your e-mail address", "");
        var message = prompt("Please enter your message", "");
        if (email != null & message != null) {
            x = "Thank you for sending us a message. We will respond to your email as soon as possible containing the relevant information";
            alert(x);
        }
    }
</script>
</body>

</html>

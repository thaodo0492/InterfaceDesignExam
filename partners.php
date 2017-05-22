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
            <a href="" class="button"><span class="symbol" >&#9993;</span>Contact Us</a>
        </div>
        <?php
        include('footer.php');
        ?>
</body>

</html>

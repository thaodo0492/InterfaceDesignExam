<!DOCTYPE html>

<html>

<head>
    <title>Partners</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <script src="javaScript.js"></script>
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
        <h1>Be our partner</h1>
        <!--<button type="button" id="contactBtn" class="btn btn-primary">CONTACT US</button>-->
        <a href="" class="button"><span class="symbol" >📧</span>Contact Us</a>
    </div>
    <?php
        include('footer.php');
    ?>
</body>
</html>

<!DOCTYPE html>

<html>

<head>
    <title>Partners</title>
    <link href="style.css" rel="stylesheet">
    <script src="javaScript.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <button type="button" id="contactBtn" class="btn btn-primary">CONTACT US</button>
    </div>
</body>
</html>

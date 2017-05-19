<!DOCTYPE html>

<html>

<head>
    <title>Index Page</title>
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
</body>
</html>
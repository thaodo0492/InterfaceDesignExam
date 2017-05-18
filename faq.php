<!DOCTYPE html>

<html>
<head>
    <title>FAQ</title>
    <link href="style.css" rel="stylesheet">
    <script src="javaScript.js"></script>
</head>

<body>
    
    <?php
    include('/header.php');
    ?>
    <div id="content" class="p-50">
        <div id="questionsDiv">
            <h1 class="disable-select">General questions</h1>
            <div id="question1" class="questionsDiv">
                
                <h3>Can I get a refund if I cancel a booking? <div id="partnerElgiganten" class="partnerIcon"></div></h3>
                <h4>If you cancel a booking, you will be able to get a refund depending on when you cancel.
                If you cancel a booking, you will be able to get a refund depending on when you cancel.</h4>
            </div>
        </div>
        
        <div class="partnerContainer">   
            <div class="partnerDivInnerContainer">
                <?php
                include('partners.php');
                ?>
            </div>

        </div>
        
    </div>
</body>
</html>

<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
    <link href="style.css" rel="stylesheet">
    <script src="javaScript.js"></script>
</head>

<body>
    
    <?php
    include('/header.php');
    ?>
    <div id="content" class="p-50">
        
        <div class="testDivContainer">
            <h1 class="disable-select">Available regions</h1>
            <div class="content testDivInnerContainer">
                <div id="imgVesterbro" class="testDiv pointer"></div>
                <div id="imgNorrebro" class="testDiv pointer"></div>
                <div id="imgOsterbro" class="testDiv pointer"></div>
            </div>
        </div>
        <div class="testDivContainer">
            <h1>List of events</h1>
            <div class="content testDivInnerContainer">
                <div>
                <div id="imgBackend" class="eventImg">
                </div>
                    <div class="eventPreviewDetails">
                        <div class="eventPreviewDetailsColumnL">
                            <a>Title:</a>
                            <a>Time:</a>
                            <a>Seats available:</a>
                        </div>
                        <div class="eventPreviewDetailsColumnR">
                            <a>PHP Course</a>
                            <a>18/06 - kl.16:00</a>
                            <a>48</a>
                        </div>
                        <a class="pointer">DETAILS</a>
                    </div>
                </div>
                <div class="eventImg"></div>
                <div class="eventImg"></div>
            </div>
        </div>
        <div class="testDivContainer">
            <h1>Our partners</h1>
            <div class="content testDivInnerContainer">
                <div class="testDiv"></div>
                <div class="testDiv"></div>
                <div class="testDiv"></div>
            </div>
        </div>
        
    </div>
</body>
</html>

<!DOCTYPE html>

<html>

<head>
    <title>Event</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <?php
    include('/header.php');
    ?>
    
    <div id="singleEventContainer">
        <div id="singleEventDiv" class="content">
            <div id="eventDivLeft">
            <div id="imgFrontend" class="testDiv pointer">
            </div>
            <div id="imgFBshare" class="shareImg pointer"></div>
            </div>
            <div id="eventDivRight">
            <div class="eventDetails">
                <a>May 17</a>
                <a>The future of CSS</a>
                <a>21/06</a>
                <a>11:00-13:50</a>
            </div>
            <div>
                <p>REGISTER</p>
            </div>
            </div>
            
        </div>

    </div>
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="javaScript.js"></script>
    
    <?php
        include('footer.php');
    ?>
</body>

</html>

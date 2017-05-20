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
            <div id="imgFrontend" class="testDiv pointer" style="height: 300px!important; width: 400px!important;">
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
            <div class="pointer">
                <p>REGISTER</p>
            </div>
            </div>
        </div>
    </div>
    
    <div id="singleEventDetailsContainer" class="content">
        <div id="singleEventDetailsContainerL">
            <div>
                <p>Description</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur metus orci, quis blandit risus tristique ac. Phasellus blandit lacus odio, ac congue odio suscipit eget. </p>
            </div>
            <div>
                <p>Program</p>
                <ul>
                    <li>11:00 - Meet and greet</li>
                    <li>11:50 - Introduction</li>
                    <li>12:30 - Guest speaker</li>
                    <li>13:00 - New practice</li>
                </ul>
            </div>
            <div>
                <p>Speaker</p>
                <p>Mr. Thao</p>
            </div>
        </div>
        <div id="singleEventDetailsContainerR">
            <div>
                <p>Description</p>
            </div>
            <div>
                <p>Add to calender</p>
            </div>
            <div>
                <p>Location</p>
            </div>
        </div>
    </div>
    
    <div id="map">
                    <iframe width="1200" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDThtVQncVO-lgLbScuMNTThJzKKL_Ekyo&origin=Nørreport&destination=Lygten+37&avoid=tolls|highways" allowfullscreen></iframe>
                </div>
    
    <div class="partnerContainer">
        <div class="partnerDivInnerContainer">
            <?php
                include('showPartners.php');
            ?>
        </div>

    </div>
                
    <?php
        include('footer.php');
    ?>
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="javaScript.js"></script>
</body>

</html>

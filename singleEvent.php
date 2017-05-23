<!DOCTYPE html>

<html>

<head>
    <title>Event</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php
        include('/imports.html');
    ?>
</head>

<body>

    <?php
    include('/header.php');
    ?>
        <div class="main-background">
            <div id="singleEventContainer">
                <div id="singleEventDiv" class="content">
                    <div id="eventDivLeft">
                        <div id="imgFrontend" class="testDiv pointer" style="height: 300px!important; width: 100%!important;">
                        </div>
                        <div id="eventShareDiv">
                            <div id="imgFBshare" class="shareImg pointer"></div>
                            <div id="imgTwittershare" class="shareImg pointer"></div>
                            <div id="imgLinkedin" class="shareImg pointer"></div>
                            <div id="imgMessenger" class="shareImg pointer"></div>
                            <div id="imgEmail" class="shareImg pointer"></div>
                        </div>
                    </div>
                    <div id="eventDivRight">
                        <div class="eventDetails">
                            <a>May 17</a>
                            <a>The future of CSS</a>
                            <a>21/06</a>
                            <a>11:00-13:50</a>
                        </div>
                        <div class="pointer">
                            <p onclick="myFunction()">REGISTER</p>
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
                        <button class="btn btn-primary" onclick="addCalender()">Add to calender</button>
                    </div>
                    <div>
                        <p>Details</p>
                        <ul>
                            <li>Food - Yes</li>
                            <li>Price - 50 kr</li>
                            <li>Level - Beginner</li>
                            <li>Available seats: 48</li>
                        </ul>
                    </div>
                    <div>
                        <p>Location</p>
                        <p>KEA</p>
                        <p>Lygten 37</p>
                        <p>2200 Nørrebro</p>
                    </div>
                </div>
            </div>
            <div id="map-bg">
                <div id="map">
                    <h1>FIND YOUR WAY TO US</h1>
                    <iframe width="1200" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDThtVQncVO-lgLbScuMNTThJzKKL_Ekyo&origin=Nørreport&destination=Lygten+37&avoid=tolls|highways" allowfullscreen></iframe>
                    <div id="imgTravelMode" class="testDiv pointer"></div>
                </div>
            </div>

            <div class="partnerContainer">
                <div class="partnerDivInnerContainer">
                    <?php
                    include('showPartners.php');
                ?>
                </div>

            </div>
        </div>

        <?php
        include('footer.php');
    ?>
    
    <script>
        function myFunction(){
            var x;
            var name=prompt("Please enter your e-mail adress","");
            if (name!=null){
               x="You have made a reservation. An e-mail will be sent to you containing the relevant information";
              alert(x);
            }
        }
        
        function addCalender() {
            window.location.replace("https://calendar.google.com/calendar/render?pli=1#main_7","_blank");
        }
    </script>
</body>

</html>

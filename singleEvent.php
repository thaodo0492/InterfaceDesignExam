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
                        <div id="imgBackend" class="testDiv pointer" style="height: 300px!important; width: 100%!important;">
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
                            <a>JUNE 18</a>
                            <a>Self-Service BI: What it is, how it is used and how to implement it</a>
                            <a>16:00-19:00</a>
                        </div>
                        <div class="pointer">
                            <p style="color: white;" onclick="myFunction()">REGISTER</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="singleEventDetailsContainer" class="content">
                <div id="singleEventDetailsContainerL">
                    <div>
                        <p>Description</p>
                        <p>Welcome again to an evening of exciting talks on Power BI. Last session it was all about beginners, in this session we will focus on Beginners to Intermediate level. </p>
                    </div>
                    <div>
                        <p>Program</p>
                        <ul>
                            <li>17:45 – 18:15 – Welcome mingle</li>

                            <li>18:15 – 18:30 – Introduction talk by PUG Leaders </li>

                            <li>18:30 – 19:00 – What is new in Power BI (latest updates): Power BI New licensing models, Report server, create custom connectors, etc…
                            </li>
                            <li>19:00 – 19:30 – Drinks, Food and Networking </li>

                            <li>19:30 – 20:30 – Deep Dive by Tobias Fransson </li>

                            <li>1. Importance of Data Source Quality & Getting to know your data sources </li>

                            <li>2. How to load data from Excel (.xlsx & .xlsm) into Power BI </li>

                            <li>3. The Basics of DAX as it relates to the Case solution presented </li>

                            <li>4. Self-Service BI, What it is, How it is used, How to implement it (demo) </li>

                            <li>19:30 – 20:45 – Discussions around the presentation. </li>

                            <li>20:45 – 21:00 – Wrap up</li>
                            <li>
                        </ul>
                    </div>
                    <div>
                        <p>Speaker</p>
                        <p>Mr. Thao</p>
                    </div>
                </div>
                <div id="singleEventDetailsContainerR">
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
                    <div>
                        <button class="btn btn-primary pointer" onclick="addCalender()">Add to calender</button>
                    </div>
                </div>
            </div>
            <div id="map-bg">
                <div id="map">
                    <h1>FIND YOUR WAY TO US</h1>
                    <iframe width="1200" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDThtVQncVO-lgLbScuMNTThJzKKL_Ekyo&origin=Nørreport&destination=Lygten+37&avoid=tolls|highways" allowfullscreen></iframe>
                    <a style="display:block" target="_blank" href="https://www.google.dk/maps/dir///@55.7038615,12.5235968,15z?hl=en">
                        <div id="imgTravelMode" class="testDiv pointer"></div>
                    </a>
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
                function myFunction() {
                    var x;
                    var name = prompt("Please enter your e-mail adress", "");
                    if (name != null) {
                        x = "You have made a reservation. An e-mail will be sent to you containing the relevant information";
                        alert(x);
                    }
                }

                function addCalender() {
                    window.location.replace("https://calendar.google.com/calendar/render?pli=1#main_7", "_blank");
                }

            </script>
</body>

</html>

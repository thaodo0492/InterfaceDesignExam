<!DOCTYPE html>

<html>

<head>
    <title>Index Page</title>
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
            <div class="testDivContainer">
                <h1 class="disable-select">AVAILABLE REGIONS</h1>
                <div class="content margin-20-auto testDivInnerContainer">

                    <a href="events.php" class="testDiv"><span id="imgVesterbro" class="testDiv pointer"></span>
                    </a>
                    <a href="events.php" class="testDiv"><span id="imgNorrebro" class="testDiv pointer"></span>
                    </a>
                    <a href="events.php" class="testDiv"><span id="imgOsterbro" class="testDiv pointer"></span>
                    </a>

                </div>
            </div>
            <div class="testDivContainer">
                <h1 class="disable-select">LIST OF ALL EVENTS</h1>
                <div class="content margin-20-auto testDivInnerContainer">
                    <div id="event1" class="eventDiv">
                        <div id="imgBackend" class="eventImg">
                        </div>
                        <div class="eventPreviewDetails">
                            <div class="eventPreviewDetailsColumnL">
                                <a>Title:</a>
                                <a>Date:</a>
                                <a>Time:</a>
                                <a>Seats available:</a>
                            </div>
                            <div class="eventPreviewDetailsColumnR">
                                <a>PHP Course</a>
                                <a>18/06</a>
                                <a>16:00-19:00</a>
                                <a>48</a>
                            </div>
                            <a href="singleEvent.php" class="pointer">DETAILS</a>
                        </div>
                        <?php
                        if(isset($_SESSION["loggedIn"])){
                            echo"<div class='deleteE'><button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button></div>";
                            }
                        ?>
                    </div>
                    <div id="event2" class="eventDiv">
                        <div id="imgFrontend" class="eventImg">
                        </div>
                        <div class="eventPreviewDetails">
                            <div class="eventPreviewDetailsColumnL">
                                <a>Title:</a>
                                <a>Date:</a>
                                <a>Time:</a>
                                <a>Seats available:</a>
                            </div>
                            <div class="eventPreviewDetailsColumnR">
                                <a>The future of CSS</a>
                                <a>21/06</a>
                                <a>11:00-13:50</a>
                                <a>35</a>
                            </div>
                            <a href="singleEvent.php" class="pointer">DETAILS</a>
                        </div>
                        <?php
                        if(isset($_SESSION["loggedIn"])){
                            echo"<div class='deleteE'><button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button></div>";
                            }
                        ?>
                    </div>
                    <div id="event3" class="eventDiv">
                        <div id="imgOs" class="eventImg">
                        </div>
                        <div class="eventPreviewDetails">
                            <div class="eventPreviewDetailsColumnL">
                                <a>Title:</a>
                                <a>Date:</a>
                                <a>Time:</a>
                                <a>Seats available:</a>
                            </div>
                            <div class="eventPreviewDetailsColumnR">
                                <a>Android OS</a>
                                <a>25/06</a>
                                <a>16:00-19:00</a>
                                <a>48</a>
                            </div>
                            <a href="singleEvent.php" class="pointer">DETAILS</a>
                        </div>
                        <?php
                        if(isset($_SESSION["loggedIn"])){
                            echo"<div class='deleteE'><button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button></div>";
                            }
                        ?>
                    </div>
                    <div id="event4" class="eventDiv">
                        <div id="imgDatabase" class="eventImg">
                        </div>
                        <div class="eventPreviewDetails">
                            <div class="eventPreviewDetailsColumnL">
                                <a>Title:</a>
                                <a>Date:</a>
                                <a>Time:</a>
                                <a>Seats available:</a>
                            </div>
                            <div class="eventPreviewDetailsColumnR">
                                <a>MySql Security</a>
                                <a>28/06</a>
                                <a>13:00-15:00</a>
                                <a>26</a>
                            </div>
                            <a href="singleEvent.php" class="pointer">DETAILS</a>
                        </div>
                        <?php
                        if(isset($_SESSION["loggedIn"])){
                            echo"<div class='deleteE'><button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button></div>";
                            }
                        ?>
                    </div>
                    <div id="event5" class="eventDiv">
                        <div id="imgBackend" class="eventImg">
                        </div>
                        <div class="eventPreviewDetails">
                            <div class="eventPreviewDetailsColumnL">
                                <a>Title:</a>
                                <a>Date:</a>
                                <a>Time:</a>
                                <a>Seats available:</a>
                            </div>
                            <div class="eventPreviewDetailsColumnR">
                                <a>CMS</a>
                                <a>02/07</a>
                                <a>18:00-22:00</a>
                                <a>23</a>
                            </div>
                            <a href="singleEvent.php" class="pointer">DETAILS</a>
                        </div>
                        <?php
                        if(isset($_SESSION["loggedIn"])){
                            echo"<div class='deleteE'><button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button></div>";
                            }
                        ?>
                    </div>
                    <div id="event6" class="eventDiv">
                        <div id="imgOs" class="eventImg">
                        </div>
                        <div class="eventPreviewDetails">
                            <div class="eventPreviewDetailsColumnL">
                                <a>Title:</a>
                                <a>Date:</a>
                                <a>Time:</a>
                                <a>Seats available:</a>
                            </div>
                            <div class="eventPreviewDetailsColumnR">
                                <a>iOS 10</a>
                                <a>8/07</a>
                                <a>10:00-19:00</a>
                                <a>52</a>
                            </div>
                            <a href="singleEvent.php" class="pointer">DETAILS</a>
                        </div>
                        <?php
                        if(isset($_SESSION["loggedIn"])){
                            echo"<div class='deleteE'><button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button></div>";
                            }
                        ?>
                    </div>
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
            $('.delete').click(function(){
        var elementD = $(this).parent().parent().attr('id');
        $(this).parent().parent().hide();
        localStorage.setItem(elementD, "hide");
        });
        //localStorage.getItem("delete");
        
        if (localStorage.getItem("event1") !== null) {
            $('#event1').hide();
        }
        if (localStorage.getItem("event2") !== null) {
            $('#event2').hide();
        }
        if (localStorage.getItem("event3") !== null) {
            $('#event3').hide();
        }
        if (localStorage.getItem("event4") !== null) {
            $('#event4').hide();
        }
        if (localStorage.getItem("event5") !== null) {
            $('#event5').hide();
        }
        if (localStorage.getItem("event6") !== null) {
            $('#event6').hide();
        }
        </script>
        
        
</body>

</html>

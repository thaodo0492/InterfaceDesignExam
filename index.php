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
        <div id="container" class="p-50">

            <div class="testDivContainer">
                <h1 class="disable-select">Available regions</h1>
                <div class="content testDivInnerContainer">
                    <div id="imgVesterbro" class="testDiv pointer"></div>
                    <div id="imgNorrebro" class="testDiv pointer"></div>
                    <div id="imgOsterbro" class="testDiv pointer"></div>
                </div>
            </div>
            <div class="testDivContainer">
                <h1 class="disable-select">List of events</h1>
                <div class="content testDivInnerContainer">
                    <div class="eventDiv">
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
                            <a class="pointer">DETAILS</a>
                        </div>
                    </div>
                    <div class="eventDiv">
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
                            <a class="pointer">DETAILS</a>
                        </div>
                    </div>
                    <div class="eventDiv">
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
                            <a class="pointer">DETAILS</a>
                        </div>
                    </div>
                    <div class="eventDiv">
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
                            <a class="pointer">DETAILS</a>
                        </div>
                    </div>
                    <div class="eventDiv">
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
                            <a class="pointer">DETAILS</a>
                        </div>
                    </div>
                    <div class="eventDiv">
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
                            <a class="pointer">DETAILS</a>
                        </div>
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
</body>

</html>

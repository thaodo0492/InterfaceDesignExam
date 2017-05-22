<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <?php
        include('/imports.html');
    ?>
</head>

<body>
    <?php
    include('/header.php');
    ?>
        <div class="main-background">
            <div id="filter">
                <h1>PLEASE OPTIMIZE YOUR SEARCH HERE</h1>
                <div id="filterbuttons">
                    <select id="cd-dropdown" class="cd-select">
                        <option value="-1" selected>Categories</option>
                        <option value="1">Database</option>
                        <option value="2">UX/UI</option>
                        <option value="3">Mobile</option>
                        <option value="4">Software</option>
                        </select>
                    <select id="cd-dropdown1" class="cd-select">
                    <option value="-1" selected>Districts</option>
                    <option value="1">Vesterbro</option>
                    <option value="2">Nørrebro</option>
                    <option value="3">Østerbro</option>
                    <option value="4">Valby</option>
                    </select>
                    <select id="cd-dropdown2" class="cd-select">
                    <option value="-1" selected>Date</option>
                    <option value="1">Today</option>
                    <option value="2">This Week</option>
                    <option value="3">Next Week</option>
                    <option value="4">This Month</option>
                    </select>
                    <select id="cd-dropdown3" class="cd-select">
                    <option value="-1" selected>Price</option>
                    <option value="1">Free</option>
                    <option value="2">Up to 10$</option>
                    <option value="3">Up to 50$</option>
                    <option value="4">More than 50$</option>
                    </select>
                </div>
            </div>





            <div class="testDivContainer">
                <h1>LIST OF ALL EVENTS</h1>
                <div class="content margin-20-auto testDivInnerContainer">
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
        <?php
            include('footer.php');
        ?>
            <script type="text/javascript">
                $(function() {

                    $('#cd-dropdown').dropdown();
                    $('#cd-dropdown1').dropdown();
                    $('#cd-dropdown2').dropdown();
                    $('#cd-dropdown3').dropdown();

                });
                
            //TESTING FIX FOR DROPDOWNS
            
            if ($('.cd-dropdown').hasClass('cd-active')) {
                this.css('z-index:2000');
            }            
            
            /*
            $('.cd-dropdown').hasClass('cd-active') {
            if ($('.cd-dropdown').hasClass('cd-active')) {
                this.css('z-index:2000');
            }
            });*/
            
            /*
             $('.cd-dropdown').change(function() {
            if ($('.cd-dropdown').hasClass('cd-active')) {
                this.css('z-index:2000');
            }
            });
            */

            </script>

</body>

</html>

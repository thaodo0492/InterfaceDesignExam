<!DOCTYPE html>
<html>

<head>
    <title>About Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <?php
    include('/header.php');
    ?>
        <div>
            <div id="aboutImage" class="margin-0-auto">
            </div>
            <div>
                <h1 class="text-about-title margin-0-auto">Welcome to Tech event</h1>
                <h1 class="margin-0-auto text-about">Tech is the natural meeting place for everyone passionate about media and technology. Whether you are a creative, architect, programmer, gamester, geek girl or serial entrepreneur, Tech gives you a forum to meet, greet and develop, every day of the year.Tech is the natural meeting place for everyone passionate about media and technology.programmer, gamester, geek girl.</h1>
            </div>
            <div id="offerblock">
                <button id="venue" class="accordion">LOOKING FOR AN EVENT VENUE? </button>
                <div class="content panel">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
                    <div class="offers">
                        <div class="offerIcons">
                            <img class="offerImage" src="images/personal-branding-by-theavinashmishra-830x552.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <div class="offerIcons">
                            <img class="offerImage" src="images/shutterstock_187109816-800x400.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <div class="offerIcons">
                            <img class="offerImage" src="images/improve-your-brand.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <div class="offerIcons">
                            <img class="offerImage" src="images/Backend.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <a href="" class="button"><span class="symbol" >📧</span>Contact Us</a>
                    </div>
                </div>
                <button id="partners" class="accordion">WANT TO BE OUR PARTNER? </button>
                <div class="content panel">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
                    <div class="offers">
                        <div class="offerIcons">
                            <img class="offerImage" src="images/personal-branding-by-theavinashmishra-830x552.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <div class="offerIcons">
                            <img class="offerImage" src="images/shutterstock_187109816-800x400.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <div class="offerIcons">
                            <img class="offerImage" src="images/improve-your-brand.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <div class="offerIcons">
                            <img class="offerImage" src="images/Backend.jpg" alt="Offer Image">
                            <div class="offerText">We offer your company visibility to the right target audience, via presence at a variety of activities. Groups can easily see that you support their initiatives. </div>
                        </div>
                        <a href="" class="button"><span class="symbol" >📧</span>Contact Us</a>
                    </div>
                </div>
            </div>



            <div id="mapblock">
                <h1>FIND YOUR WAY TO US</h1>
                <div id="map">
                    <iframe width="1200" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDThtVQncVO-lgLbScuMNTThJzKKL_Ekyo&origin=Nørreport&destination=Lygten+37&avoid=tolls|highways" allowfullscreen></iframe>
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

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="javaScript.js"></script>

</body>

</html>

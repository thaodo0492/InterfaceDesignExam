<!DOCTYPE html>
<html>

<head>
    <title>About Page</title>
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
            <div id="aboutImage" class="margin-0-auto">
            </div>
            <div>
                <h1 class="text-about-title margin-0-auto">WELCOME TO TECH EVENT</h1>
                <p class="margin-0-auto text-about">Tech is the natural meeting place for everyone passionate about media and technology. Whether you are a creative, architect, programmer, gamester, geek girl or serial entrepreneur, Tech gives you a forum to meet, greet and develop, every day of the year.Tech is the natural meeting place for everyone passionate about media and technology.programmer, gamester, geek girl.</p>
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
                        <a onclick="myFunction()" href="" class="button"><span class="symbol" >&#9993;</span>Contact Us</a>
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
                        <a onclick="myFunction()" href="" class="button"><span class="symbol" >&#9993;</span>Contact Us</a>

                    </div>
                    <hr>
                </div>

            </div>



            <div id="mapblock">
                <h1>FIND YOUR WAY TO US</h1>
                <div id="map">
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
                    var email = prompt("Please enter your e-mail address", "");
                    var message = prompt("Please enter your message", "");
                    if (email != null & message != null) {
                        x = "Thank you for sending us a message. We will respond to your email as soon as possible containing the relevant information";
                        alert(x);
                    }
                }

            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">


            </script>
            <script src="javaScript.js"></script>

</body>

</html>

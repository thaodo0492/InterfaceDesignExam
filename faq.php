<!DOCTYPE html>

<html>

<head>
    <title>FAQ</title>
    <link href="style.css" rel="stylesheet">
    <script src="javaScript.js"></script>
</head>

<body>

    <?php
    include('/header.php');
    ?>
        <div>
            <div id="faqImage" class="margin-0-auto">
            </div>
            <div id="faq-search">
                <div id="faqForm">
                    <form>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                    </form>
                </div>
                <h2 class="questions"> Frequently Asked Questions </h2>
            </div>

            <div id="offerblock">

                <button id="1" class="accordion faq-button">Q: LOOKING FOR AN EVENT VENUE? </button>
                <div class="content panel answer">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
                </div>
                <button id="2" class="accordion faq-button">Q: LOOKING FOR AN EVENT VENUE? </button>
                <div class="content panel answer">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
                </div>
                <button id="3" class="accordion faq-button">Q: LOOKING FOR AN EVENT VENUE? </button>
                <div class="content panel answer">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
                </div>
                <button id="4" class="accordion faq-button">Q: LOOKING FOR AN EVENT VENUE? </button>
                <div class="content panel answer">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
                </div>
                <button id="5" class="accordion faq-button">Q: LOOKING FOR AN EVENT VENUE? </button>
                <div class="content panel answer">
                    <p>In an expansive business it is imperative to increase one's visibility and share with others what you do. Competition is fierce and it's vital to get your message across with clarity, as well as to define and target your audience in order for your business to grow and thrive.</p>
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

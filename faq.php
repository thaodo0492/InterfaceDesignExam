<!DOCTYPE html>

<html>

<head>
    <title>FAQ</title>
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
            <div id="faqImage" class="margin-0-auto">
            </div>
            <div id="faq-center">
                <form>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                </form>
                <h2> Frequently Asked Questions </h2>
                <div id="page-one">
                    <button id="1" class="accordion faq-button">Q: How do I sign up and create an account? </button>
                    <div class="content panel answer">
                        <p>You can sign up for the app by using your personal email address or via your Facebook login details. If you choose to go with Facebook the app will input all of your information such as name, birthday and profile picture so you have a ready-made profile.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  30 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="2" class="accordion faq-button">Q: How will the app make my event special and unique? </button>
                    <div class="content panel answer">
                        <p> The app has some great features, which will make the event run smoothly and can ensure that it is one of a kind. Your event will have an individual QR code, which can be printed onto invitations, posters and nametags, which allows people to connect and engage quickly. There is also a Live View option, which is a slideshow of all of the pictures and comments published within the event, which can then be projected or put onto screens within the venue. It has a pause, forward and rewind function so you can quickly scan through to the best bits.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  3 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="3" class="accordion faq-button">Q: How do I create an event? </button>
                    <div class="content panel answer">
                        <p>You can create an event by clicking on the Events flag icon on the banner at the bottom of the page or via your dropdown menu on the left hand side. Once you have done that you shall be directed to a calendar page. Click on the date when you wish to host your event and you shall be forwarded to a “Create event” page which shall allow you to add a Cover Photo, Event Title, Start/End Time and invite your guests.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  15 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="4" class="accordion faq-button">Q: Is there a way I can speak to my guests and contacts privately? </button>
                    <div class="content panel answer">
                        <p>Yes, the app also includes a private messaging service which allows you to contact your guests without the others knowing.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  79 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="5" class="accordion faq-button">Q: How can I invite people I meet at an event to connect with me, and join my personal contact list? </button>
                    <div class="content panel answer">
                        <p> The app has a section for your contacts so you can clearly identify you have connected with and whom you haven’t. From within the event you can request for people to join your network and when they accept the Pending Friendship label shall disappear.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  25 people found this answer useful</span>
                        </p>
                    </div>
                </div>
                <div id="page-two" style="display:none">
                    <button id="6" class="accordion faq-button">Q: What can I post in my event? </button>
                    <div class="content panel answer">
                        <p>You and your guests can use the app to post pictures and comments to create 360-degree view of the event. Therefore, as a host you will never miss out on any of the action!
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  30 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="7" class="accordion faq-button">Q: Can I separate my contacts into groups? </button>
                    <div class="content panel answer">
                        <p> Yes, the app has a section for groups, which allows you to separate your contacts making them easier to identify. It also makes inviting people easier as you can invite a whole group of people such as Work Colleagues, Friends and Family rather than having to send out individual invites.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  3 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="8" class="accordion faq-button">Q: How can I invite people I meet at an event to connect with me, and join my personal contact list? </button>
                    <div class="content panel answer">
                        <p> The app has a section for your contacts so you can clearly identify you have connected with and whom you haven’t. From within the event you can request for people to join your network and when they accept the Pending Friendship label shall disappear.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  15 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="9" class="accordion faq-button">Q: Is there a way I can speak to my guests and contacts privately? </button>
                    <div class="content panel answer">
                        <p>Yes, the app also includes a private messaging service which allows you to contact your guests without the others knowing.</p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  79 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="10" class="accordion faq-button">Q: Is there a way I can speak to my guests and contacts privately? </button>
                    <div class="content panel answer">
                        <p>Yes, the app also includes a private messaging service which allows you to contact your guests without the others knowing.</p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  79 people found this answer useful</span>
                        </p>
                    </div>
                </div>
                <div class="page-button">
                    <button type="button" onclick="return show('page-one','page-two');">&#x21E0;</button>
                    <button type="button" onclick="return show('page-one','page-two');">1</button>
                    <button type="button" onclick="return show('page-two','page-one');">2</button>
                    <button type="button" onclick="return show('page-two','page-one');">&#x21E2;</button>
                </div>
                <h2> Other Questions </h2>
                <div id="page-three">
                    <button id="11" class="accordion faq-button">Q: How do I sign up and create an account? </button>
                    <div class="content panel answer">
                        <p>You can sign up for the app by using your personal email address or via your Facebook login details. If you choose to go with Facebook the app will input all of your information such as name, birthday and profile picture so you have a ready-made profile.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  30 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="12" class="accordion faq-button">Q: How will the app make my event special and unique? </button>
                    <div class="content panel answer">
                        <p> The app has some great features, which will make the event run smoothly and can ensure that it is one of a kind. Your event will have an individual QR code, which can be printed onto invitations, posters and nametags, which allows people to connect and engage quickly. There is also a Live View option, which is a slideshow of all of the pictures and comments published within the event, which can then be projected or put onto screens within the venue. It has a pause, forward and rewind function so you can quickly scan through to the best bits.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  3 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="13" class="accordion faq-button">Q: How do I create an event? </button>
                    <div class="content panel answer">
                        <p>You can create an event by clicking on the Events flag icon on the banner at the bottom of the page or via your dropdown menu on the left hand side. Once you have done that you shall be directed to a calendar page. Click on the date when you wish to host your event and you shall be forwarded to a “Create event” page which shall allow you to add a Cover Photo, Event Title, Start/End Time and invite your guests.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  15 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="14" class="accordion faq-button">Q: Is there a way I can speak to my guests and contacts privately? </button>
                    <div class="content panel answer">
                        <p>Yes, the app also includes a private messaging service which allows you to contact your guests without the others knowing.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  79 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="15" class="accordion faq-button">Q: How can I invite people I meet at an event to connect with me, and join my personal contact list? </button>
                    <div class="content panel answer">
                        <p> The app has a section for your contacts so you can clearly identify you have connected with and whom you haven’t. From within the event you can request for people to join your network and when they accept the Pending Friendship label shall disappear.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  25 people found this answer useful</span>
                        </p>
                    </div>
                </div>
                <div id="page-four" style="display:none">
                    <button id="16" class="accordion faq-button">Q: What can I post in my event? </button>
                    <div class="content panel answer">
                        <p>You and your guests can use the app to post pictures and comments to create 360-degree view of the event. Therefore, as a host you will never miss out on any of the action!
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  30 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="17" class="accordion faq-button">Q: Can I separate my contacts into groups? </button>
                    <div class="content panel answer">
                        <p> Yes, the app has a section for groups, which allows you to separate your contacts making them easier to identify. It also makes inviting people easier as you can invite a whole group of people such as Work Colleagues, Friends and Family rather than having to send out individual invites.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  3 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="18" class="accordion faq-button">Q: How can I invite people I meet at an event to connect with me, and join my personal contact list? </button>
                    <div class="content panel answer">
                        <p> The app has a section for your contacts so you can clearly identify you have connected with and whom you haven’t. From within the event you can request for people to join your network and when they accept the Pending Friendship label shall disappear.
                        </p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  15 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="19" class="accordion faq-button">Q: Is there a way I can speak to my guests and contacts privately? </button>
                    <div class="content panel answer">
                        <p>Yes, the app also includes a private messaging service which allows you to contact your guests without the others knowing.</p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  79 people found this answer useful</span>
                        </p>
                    </div>
                    <button id="20" class="accordion faq-button">Q: Is there a way I can speak to my guests and contacts privately? </button>
                    <div class="content panel answer">
                        <p>Yes, the app also includes a private messaging service which allows you to contact your guests without the others knowing.</p>
                        <p>
                            <img src="images/like.png" alt="Like icon" height="22" width="22">
                            <span>  79 people found this answer useful</span>
                        </p>
                    </div>
                </div>
                <div class="page-button">
                    <button type="button" onclick="return show('page-three','page-four');">&#x21E0;</button>
                    <button type="button" onclick="return show('page-three','page-four');">1</button>
                    <button type="button" onclick="return show('page-four','page-three');">2</button>
                    <button type="button" onclick="return show('page-four','page-three');">&#x21E2;</button>
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

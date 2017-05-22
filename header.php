<?php
    session_start();
?>
    <div class="topnavContainer p-sides-50">
        <div class="topnavInnerContainer">
            <div class="topnav" id="myTopnav">
                <a href="index.php" id="navLogo"><img class="pointer" src="images/LogoInverted.svg" alt="facebook logo" height="30" width="auto"></a>
                <a href="events.php">Events</a>
                <a href="partners.php">Partners</a>
                <a href="about.php">About</a>
                <a href="faq.php">FAQ</a>
                <a href="javascript:void(0);" class="icon" onclick="TopnavOpen()">&#9776;</a>
            </div>
            <div>
                <img class="m-sides-8 pointer" src="images/FB50.png" alt="facebook logo" height="25" width="auto">
                <img class="m-sides-8 pointer" src="images/Twitter400.png" alt="twitter logo" height="25" width="auto">
                <img class="m-sides-8 pointer" src="images/Instagram500.png" alt="instagram logo" height="25" width="auto" style="background-color: whitesmoke; border-radius: 5px;">
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION["loggedIn"])){
        echo "<div id='adminNav'>
            <a href='logoutApi.php' id='adminNavHeading'>LOGOUT</a>
            <a href='addPartner.php' id='adminNavHeading'>Add partner</a>
            <a href='createAccount.php' id='adminNavHeading'>Add admin</a>
            <a href='createEvent.php' id='adminNavHeading'>Add event</a>
        </div>";
    }
?>

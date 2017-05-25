<?php
    session_start();
    $url = $_SERVER['REQUEST_URI'];
?>
    <div class="topnavContainer p-sides-50">
        <div class="topnavInnerContainer">
            <div class="topnav" id="myTopnav">
                <a href="index.php" id="navLogo"><img class="pointer" src="images/LogoInverted.svg" alt="facebook logo" height="30" width="auto"></a>
                
                <?php
                if (strpos($url,'events')) {
                    echo "<a href='index.php' style='background-color: #f6f6f6; color: black;'>Events</a>";
                    
                }else{
                    echo "<a href='index.php'>Events</a>";
                }
                
                
                if (strpos($url,'partners')) {
                    echo "<a href='partners.php' style='background-color: #f6f6f6; color: black;'>Partners</a>";
                    
                }else{
                    echo "<a href='partners.php'>Partners</a>";
                }
                
                if (strpos($url,'about')) {
                    echo "<a href='about.php' style='background-color: #f6f6f6; color: black;'>About</a>";
                    
                }else{
                    echo "<a href='about.php'>About</a>";
                }
                
                if (strpos($url,'faq')) {
                    echo "<a href='faq.php' style='background-color: #f6f6f6; color: black;'>FAQ</a>";
                    
                }else{
                    echo "<a href='faq.php'>FAQ</a>";
                }
                ?>
                <a href="javascript:void(0);" class="icon" onclick="TopnavOpen()">&#9776;</a>
            </div>
            <div>
                <a href="https://www.facebook.com/" target="_blank"><img class="m-sides-8 pointer" src="images/FB50.png" alt="facebook logo" height="25" width="auto"></a>
                <a href="https://twitter.com/" target="_blank"><img class="m-sides-8 pointer" src="images/Twitter400.png" alt="twitter logo" height="25" width="auto"></a>
                <a href="https://www.instagram.com/" target="_blank"><img class="m-sides-8 pointer" src="images/Instagram500.png" alt="instagram logo" height="25" width="auto" style="background-color: whitesmoke; border-radius: 5px;"></a>
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

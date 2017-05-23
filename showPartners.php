<div id="partnerPDiv">
    <h1 class="disable-select">PREMIUM PARTNERS</h1>
    <div class="content bg">
        <div id="partnerDanskebank" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";
                    
                }
            ?>
        </div>
        <div id="partnerElgiganten" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";
                
                }
            ?>
        </div>
        <div id="partnerNovo" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerRadio" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerRadis" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerMicro" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerOti" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerGra" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerTru" class="partnerIconP">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
    </div>
</div>
<div id="partnerDiv">
    <h1 class="disable-select">OTHER PARTNERS</h1>
    <div class="content bg">
        <div id="partnerBP" class="partnerIcon">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerLogitech" class="partnerIcon">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerMicrosoft" class="partnerIcon">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerBP" class="partnerIcon">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerSe" class="partnerIcon">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
        <div id="partnerPi" class="partnerIcon">
            <?php
                if(isset($_SESSION["loggedIn"])){echo"<button type='button''>&#x2710;</button><button class='delete' type='button'>&#x2612;</button>";}
            ?>
        </div>
    </div>
</div>
<script>
    $('.delete').click(function(){
        var elementD = $(this).parent().attr('id');
        $(this).parent().hide();
        localStorage.setItem(elementD, "hide");
    });
    //localStorage.getItem("delete");
    
    if (localStorage.getItem("partnerDanskebank") !== null) {
        $('#partnerDanskebank').hide();
    }
    if (localStorage.getItem("partnerElgiganten") !== null) {
        $('#partnerElgiganten').hide();
    }
    if (localStorage.getItem("partnerNovo") !== null) {
        $('#partnerNovo').hide();
    }
    if (localStorage.getItem("partnerRadio") !== null) {
        $('#partnerRadio').hide();
    }
    if (localStorage.getItem("partnerRadis") !== null) {
        $('#partnerRadis').hide();
    }
    if (localStorage.getItem("partnerMicro") !== null) {
        $('#partnerMicro').hide();
    }
    if (localStorage.getItem("partnerOti") !== null) {
        $('#partnerOti').hide();
    }
    if (localStorage.getItem("partnerGra") !== null) {
        $('#partnerGra').hide();
    }
    if (localStorage.getItem("partnerTru") !== null) {
        $('#partnerTru').hide();
    }
    
    
    
    if (localStorage.getItem("partnerLogitech") !== null) {
        $('#partnerLogitech').hide();
    }
    if (localStorage.getItem("partnerMicrosoft") !== null) {
        $('#partnerMicrosoft').hide();
    }
    if (localStorage.getItem("partnerBP") !== null) {
        $('#partnerBP').hide();
    }
    if (localStorage.getItem("partnerSe") !== null) {
        $('#partnerSe').hide();
    }
    if (localStorage.getItem("partnerPi") !== null) {
        $('#partnerPi').hide();
    }

    
    //$('#partnerElgiganten').hide();
                //$('#partnerElgiganten').parent().hide();
</script>

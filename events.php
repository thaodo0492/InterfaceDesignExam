<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="style.css" rel="stylesheet">
    <script src="js/modernizr.custom.63321.js"></script>
</head>

<body>
    <?php
    include('/header.php');
    ?>
        <div>
            <h1 id="text-filter">PLEASE OPTIMIZE YOUR SEARCH HERE</h1>
            <div id="filterbuttons" class="margin-0-auto">
                <select id="cd-dropdown" class="cd-select">
                    <option value="-1" selected>Pick an</option>
                    <option value="1">Linux</option>
                    <option value="2">Mac</option>
                    <option value="3">Windows</option>
                    <option value="4">Android</option>
                    </select>
                <select id="cd-dropdown1" class="cd-select">
                <option value="-1" selected>Pick an</option>
                <option value="1">Linux</option>
                <option value="2">Mac</option>
                <option value="3">Windows</option>
                <option value="4">Android</option>
                </select>
                <select id="cd-dropdown2" class="cd-select">
                <option value="-1" selected>Pick an</option>
                <option value="1">Linux</option>
                <option value="2">Mac</option>
                <option value="3">Windows</option>
                <option value="4">Android</option>
                </select>
                <select id="cd-dropdown3" class="cd-select">
                <option value="-1" selected>Pick an</option>
                <option value="1">Linux</option>
                <option value="2">Mac</option>
                <option value="3">Windows</option>
                <option value="4">Android</option>
                </select>
            </div>
            <div class="partnerContainer">
                <div class="partnerDivInnerContainer">
                    <?php
                include('showPartners.php');
                ?>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.dropdown.js"></script>
        <script type="text/javascript">
            $(function() {

                $('#cd-dropdown').dropdown();
                $('#cd-dropdown1').dropdown();
                $('#cd-dropdown2').dropdown();
                $('#cd-dropdown3').dropdown();

            });

        </script>

</body>

</html>

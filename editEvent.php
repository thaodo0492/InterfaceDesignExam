<!DOCTYPE html>

<html>

<head>
    <title>Edit Event</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php
        include('/imports.html');
    ?>
</head>

<body class="main-background">

    <?php
        include('/header.php');
    ?>
        <div id="single-event">
            <img src="images/3.jpg" alt="Danske Bank">
        </div>
        <div id="formsEdit">
            <form class="formEditEvent">

                <div class="forms">
                    <p>Event title: </p>
                    <input size="55" type="text" name="fname">
                </div>

                <div class="forms">
                    <p>Location</p>
                    <select>
                    <option value="norrebro">Nørrebro</option>
                    <option value="vesterbro">Vesterbro</option>
                    <option value="osterbro">Østerbro</option>
                    <option value="select" selected>Select Location</option>
                </select>
                </div>

                <div class="forms">
                    <p>Street:</p>
                    <input size="55" type="text" name="fname">
                </div>

                <div class="forms">
                    <p>Starts:</p>
                    <input size="55" type="datetime-local" name="eventTime">
                </div>

                <div class="forms">
                    <p>Ends:</p>
                    <input size="55" type="datetime-local" name="eventTime">
                </div>

                <div class="forms">
                    <p>Speakers name:</p>
                    <input size="55" type="text" name="lname">
                </div>

                <div class="forms">
                    <p>Available seats:</p>
                    <input size="55" type="text" name="lname">
                </div>

                <div class="forms">
                    <p>Event image </p>
                    <input size="55" type="file" name="pic" accept="image/*">
                </div>
                <div class="forms">
                    <p>Event description: </p>
                    <input size="55" type="text" name="lname">
                </div>
            </form>
            <form class="formEditEvent">
                <div class="forms">
                    <p>Food: </p>
                    <input size="55" type="text" name="lname">
                </div>

                <div class="forms">
                    <p>Facebook link: </p>
                    <input size="55" type="text" name="fname">
                </div>

                <div class="forms">
                    <p>Twitter link: </p>
                    <input size="55" type="text" name="fname">
                </div>

                <div class="forms">
                    <p>LinkedIn link: </p>
                    <input size="55" type="text" name="fname">
                </div>

                <div class="forms">
                    <p>Ticket </p>
                    <select id="ticketSelect">
                <option value="free">Free</option>
                <option value="paid">Paid</option>
                <option value="select" selected>Ticket type</option>
                </select>
                    <span id="priceP">
                    <p>Price: </p>
                    <input size="55" type="text" id="eventPrice" name="lname"></span>
                </div>


                <div class="forms">
                    <p>Tickets available:</p>
                    <input size="55" type="text" name="lname">
                </div>


                <div class="forms">
                    <p>Details: </p>
                    <input size="55" type="text" name="lname">
                </div>
                <input size="55" type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
        <?php
        include('footer.php');
    ?>
            <script>
                $('#ticketSelect').change(function() {
                    if ($('#ticketSelect').val() == 'free') {
                        $("#priceP").hide();
                        console.log($('#ticketSelect').val());
                    } else {
                        $("#priceP").show();
                    }
                });

            </script>

</body>

</html>

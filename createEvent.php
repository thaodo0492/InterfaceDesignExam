<!DOCTYPE html>

<html>

<head>
    <title>Create event</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php
        include('/imports.html');
    ?>
</head>

<body class="imgEvent">

    <?php
        include('/header.php');
    ?>
    <div style="display: flex; max-width: 1000px;
    margin: auto;">
    <form id="formCreateEvent" action="">
        Event title: <input type="text" name="fname"><br>
        Location <select>
            <option value="norrebro">Nørrebro</option>
            <option value="vesterbro">Vesterbro</option>
            <option value="osterbro">Østerbro</option>
            <option value="select" selected>Select Location</option>
        </select>
        Street: <input type="text" name="fname"><br>
        <hr style="width: 100%;">
        Starts: <input type="datetime-local" name="eventTime"><br>
        Ends: <input type="datetime-local" name="eventTime"><br>
        Speakers name: <input type="text" name="lname"><br>
        Available seats: <input type="text" name="lname"><br>
        Event image  <input type="file" name="pic" accept="image/*"><br>
        Event description: <input type="text" name="lname"><br>
        Food: <input type="text" name="lname"><br>
    </form>
    
    <form id="formCreateEvent2" action="">
        Facebook link: <input type="text" name="fname"><br>
        Twitter link: <input type="text" name="fname"><br>
        LinkedIn link: <input type="text" name="fname"><br>
        <hr style="width: 100%;">
        Ticket <select id="ticketSelect">
            <option value="free">Free</option>
            <option value="paid">Paid</option>
            <option value="select" selected>Ticket type</option>
        </select>
        <p id="priceP">Price: <input type="text" id="eventPrice" name="lname"><br></p>
        Tickets available: <input type="text" name="lname"><br>
        Details: <input type="text" name="lname"><br>
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="javaScript.js"></script>

                <?php
                    include('footer.php');
                ?>
                
                
    <script>
    //HIDE AND SHOW
/*
    $('#ticketSelect option').each(function() {
    if(free.selected){
        $("#eventPrice").hide();
    }
    });*/

    $('#ticketSelect').change(function(){
    if($('#ticketSelect').val() == 'free'){
        $("#priceP").hide();
        console.log($('#ticketSelect').val());
    } else {
        $("#priceP").show();
    }
    });

    
    </script>
    
</body>

</html>

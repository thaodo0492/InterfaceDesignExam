<!DOCTYPE html>

<html>

<head>
    <title>Create account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php
        include('/imports.html');
    ?>
</head>

<body class="imgEmployee">

    <?php
        include('/header.php');
    ?>
        
    <form id="formCreateAccount" action="">
        First name: <input type="text" name="fname"><br>
        Last name: <input type="text" name="lname"><br>
        Employee id: <input type="text" name="lname"><br>
        DOB: <input type="text" name="lname"><br>
        E-mail: <input type="text" name="lname"><br>
        Address: <input type="text" name="lname"><br>
        Phone: <input type="text" name="lname"><br>
        Date of employment: <input type="text" name="lname"><br>
        <p id="checkInfo">Send info to employee e-mail <input type="checkbox" value="Bike"></p>
        <br>
        <input type="submit" value="Submit">
    </form>
    <div></div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="javaScript.js"></script>

                <?php
                    include('footer.php');
                ?>
</body>

</html>

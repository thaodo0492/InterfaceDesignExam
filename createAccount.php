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
            First name: <input type="text" name="fname"><br> Last name: <input type="text" name="lname"><br> Employee id: <input type="text" name="lname"><br> DOB: <input type="text" name="lname"><br> E-mail: <input type="text" name="lname"><br> Address: <input type="text" name="lname"><br> Phone: <input type="text" name="lname"><br> Date of employment: <input type="text" name="lname"><br>
            <p id="checkInfo">Send info to employee e-mail <input type="checkbox" value="Bike"></p>
            <br>
            <!--            <input type="submit" value="Submit">-->
            <button type="button" id="btnSubmit" class="btn btn-primary postBtn">Submit</button>
        </form>


        <?php
        include('footer.php');
    ?>
</body>

</html>

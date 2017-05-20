<!DOCTYPE html>

<html>

<head>
    <title>Add partner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<body class="imgPartner">

    <?php
        include('/header.php');
    ?>
    <div>
        <form id="formAddAccount" action="" method="post" enctype="multipart/form-data">
            Partner: <input type="text" name="fname"><br>
            Description: <input type="text" name="lname"><br>
            E-mail: <input type="text" name="lname"><br>
            Logo <input type="file" name="fileToUpload" id="fileToUpload"><br>
            Phone: <input type="text" name="lname"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="javaScript.js"></script>

                <?php
                    include('footer.php');
                ?>
</body>

</html>

<!DOCTYPE html>

<html>

<head>
    <title>Add partner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php
        include('/imports.html');
    ?>
</head>

<body class="imgPartner">
    <div class="container">
        <?php
        include('/header.php');
        ?>
            <div>
                <form id="formAddAccount" action="" method="post" enctype="multipart/form-data">
                    Partner: <input type="text" name="fname"><br> Description: <input type="text" name="lname"><br> E-mail: <input type="text" name="lname"><br> Logo <input type="file" name="fileToUpload" id="fileToUpload"><br> Phone: <input type="text" name="lname"><br>
                    <a href="singlePartner.php"><button type="button" id="btnSubmit" class="btn btn-primary postBtn pointer">Submit</button></a>
                </form>
            </div>
    </div>
    <?php
        include('footer.php');
    ?>
</body>

</html>

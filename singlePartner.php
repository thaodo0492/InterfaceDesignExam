<!DOCTYPE html>
<html>

<head>
    <title>Single Partner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php
        include('/imports.html');
    ?>
</head>

<body>

    <?php
        include('/header.php');
    ?>
        <div class="main-background">
            <div id="single-partner">
                <img src="images/Danskebank.png" alt="Danske Bank">
            </div>
            <form id="editPartner" action="" method="post" enctype="multipart/form-data">
                <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" /></svg> <span>Choose a file&hellip;</span></label> Partner: <input type="text" name="fname" value="Danske Bank"><br> Description: <input type="text" name="lname" value="Danske Bank is a Danish bank whose name also literally translates into Danish Bank. It was founded 5 October 1871 as Den Danske Landmandsbank, Hypothek- og Vexelbank i Kjøbenhavn"><br> E-mail: <input type="text" name="lname" value="danske@gmail.com"><br> Phone: <input type="text" name="lname" value=" 0045 773 322 33"><br>
                <button type="button" id="btnSubmit" class="btn btn-primary postBtn">Submit</button>
            </form>
        </div>

        <?php
        include('footer.php');
    ?>
</body>

</html>

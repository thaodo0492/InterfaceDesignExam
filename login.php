<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php
        include('/imports.html');
        ?>
</head>

<body>
    <?php
            include('/header.php');
    ?>
        <div class="login-background" id="wrapper">
            <div id="indexContent">
                <h3 id="headline">LOGIN</h3>
                <div id="loginDiv" class="content">
                    <h5 id="infoLabelUser" class="infoLabel">USERNAME</h5>
                    <input id="userInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="text" name="txLoginFormEmail">
                    <h5 id="errorLabelUser" class="errorLabel"></h5>
                    <h5 id="infoLabelUser" class="infoLabel">PASSWORD</h5>
                    <input id="passInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="password" name="txLoginFormPassword">
                    <h5 id="errorLabelPass" class="errorLabel"></h5>
                    <button type="button" id="btnLogin" class="btn btn-primary postBtn">Login</button>
                    <h5 id="LoginLabel" class="errorLabel bottomLabel"></h5>
                </div>

            </div>
        </div>
        <?php
            include('footer.php');
        ?>
        
        <script>
var sLink = "loginApi.php";

$("#btnLogin").click(function () {
console.log("LOGGING...");
    $.ajax({
        "url": sLink,
        "dataType": "text",
        "method": "post",
        "cache": false
    }).done(function (Data) {
        //var result = JSON.parse(Data);
        if (Data == "success") {
            window.location.replace("http://stackoverflow.com");
        }
        console.log(Data);
        window.location.replace("index.php");
    })
});
</script>
</body>
</html>

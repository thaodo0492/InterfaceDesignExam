<?php
    session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>

<div id="wrapper">

<div id="indexContent">
  <h3 id="headline">LOGIN</h3>
  <!--<div id="btnChange">
    <button type="button" id="btnLoginSection" class="btn .btn-md btn-primary">Sign in</button>
    <button type="button" id="btnCreateSection" class="btn btn-primary">Sign up</button> 
  </div>-->
    
  <div id="loginDiv" class="content">
    <h5 id="infoLabelUser" class="infoLabel">USERNAME</h5>
    <input id="userInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="text" name="txLoginFormEmail">
    <h5 id="errorLabelUser" class="errorLabel"></h5>
    <h5 id="infoLabelUser" class="infoLabel">PASSWORD</h5>
    <input id="passInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="password" name="txLoginFormPassword">
    <h5 id="errorLabelPass" class="errorLabel"></h5>
    <button type="button" id="btnLogin" class="btn btn-primary postBtn">LOGIN</button>
    <h5 id="LoginLabel" class="errorLabel bottomLabel"></h5>
  </div>
    
<!--
  <div id="createDiv" class="content" style="display: none;">
    <h5 class="infoLabel">USERNAME</h5>
    <input id="userCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="text" name="txLoginFormEmail">
    <h5 id="CreateLabelUser" class="errorLabel"></h5>
    <h5 class="infoLabel">PASSWORD</h5>
    <input id="passCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="password" name="txLoginFormPassword">
    <h5 id="CreateLabelPass" class="errorLabel"></h5>
    <h5 class="infoLabel">REPEAT PASSWORD</h5>
    <input id="passRepeatCreateInput" autocorrect="off" autocapitalize="off" autocomplete="off" class="loginInputLoginpage" type="password" name="txLoginFormPassword">
    <h5 id="CreateLabelPassRepeat" class="errorLabel"></h5>
    <button type="button" id="btnCreate" class="btn btn-primary postBtn">CREATE</button>
    <h5 id="CreateLabel" class="errorLabel bottomLabel"></h5>
    <h5 id="CreateLabelOk" class="successLabel bottomLabel"></h5>
  </div>
  -->
</div>

</div>

    <script>
    //HIDE AND SHOW BASED ON BUTTONS
    $("#btnCreateSection").click(function(){
      $("#createDiv").show();
      $("#loginDiv").hide();
      $(".errorLabel").html("");
      $(".bottomLabel").html("");
      $("input").val("");
    });
    
    $("#btnLoginSection").click(function(){
      $("#loginDiv").show();
      $("#createDiv").hide();
      $(".errorLabel").html("");
      $(".bottomLabel").html("");
      $("input").val("");
    });
    
    var sLink = "loginApi.php";
    
    $("#btnLogin").click(function(){
        
        $.ajax({
         "url":sLink,
         "dataType":"text",
         "method":"post",
         "cache": false
         }).done( function(Data){
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
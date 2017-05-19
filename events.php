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
    <div class="container">
        <!-- Codrops top bar -->
        <div class="codrops-top clearfix">
            <a href="http://tympanus.net/Development/Calendario/">
                <strong>&laquo; Previous Demo: </strong>Flexible Calendar Plugin
            </a>
            <span class="right">
					<a href="http://icomoon.io/app/">Icons created with Icomoon</a>
					<a href="http://tympanus.net/codrops/?p=12452">
						<strong>Back to the Codrops Article</strong>
					</a>
				</span>
        </div>
        <!--/ Codrops top bar -->
        <header class="clearfix">
            <h1>Simple Effects<span>for Drop-Down Lists</span></h1>
            <nav class="codrops-demos">
                <a href="index.html">Demo 1</a>
                <a href="index2.html">Demo 2</a>
                <a href="index3.html">Demo 3</a>
                <a class="current-demo" href="index4.html">Demo 4</a>
                <a href="index5.html">Demo 5</a>
                <a href="index6.html">Demo 6</a>
            </nav>
        </header>
        <section class="main clearfix">
            <div class="fleft">
                <p>Try holding down the mouse on the drop-down label.</p>
                <p>In this example we use a gutter of 0 (default), stack the items with a slight offset, and rotate the select label while clicking it. The effect will only be visible for browsers supporting 3D transforms.</p>
            </div>
            <div class="fleft">
                <select id="cd-dropdown" class="cd-select">
						<option value="-1" selected>Pick an operating system</option>
						<option value="1" class="icon-tux">Linux</option>
						<option value="2" class="icon-finder">Mac</option>
						<option value="3" class="icon-windows">Windows</option>
						<option value="4" class="icon-android">Android</option>
					</select>
            </div>
        </section>
    </div>
    <!-- /container -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.dropdown.js"></script>
    <script type="text/javascript">
        $(function() {

            $('#cd-dropdown').dropdown();

        });

    </script>

</body>

</html>

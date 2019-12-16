<?php
    session_start();
?>

<html>

    <head>
        <title>
            Background Setting
        </title>
    </head>

    <body style="background-color:<?=$_SESSION['background_color']?>">
        <p>
            choice a color.
        </p>
    </body>

</html>
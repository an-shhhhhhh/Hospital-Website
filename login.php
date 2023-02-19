<?php
    session_start();
?>

<html>
    <head>
        <title>
            home page for patients
        </title>
        <style>
            body{
                padding: 20px;
                background: linear-gradient(to top right, blue 0%, black 80%);
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
    <div class="button">
        <a href="logout.php" style="float: right;">
            <input type="button" id="button" value="LOGOUT">
        </a>

        <h1 style="color:white;">
            WELCOME PATIENT
        </h1>

        <br>
    </body>
</html>
<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "realestate");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "We are sorry, but we are having techinical difficulties.\n";
        echo 'error: ' . $mysqli->connect_error . '\n';
        exit();
    } 

    mysqli_query($mysqli, "INSERT INTO clients (fname, email, message) 
    VALUES('$_POST[fname]', '$_POST[email]', '$_POST[message]')");
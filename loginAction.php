<?php




/*
 * Store this information for the example
 * DO NOT DO THIS ON A PRODUCTION SITE
 * username= yeah
 * password= bro
 * password hash = 0cfe0ef3a357503c4a4538414b870ca1
 */

    $username="yeah";
    $passHash="0cfe0ef3a357503c4a4538414b870ca1";


    if($username === $_POST["user"]){

        if($passHash === md5($_POST["pass"])){
            echo "Password authenticated";
            session_start();
            $_SESSION["status"] = "loggedIn";
            $_SESSION["username"] = $_POST["user"];
        }
    }

    ?>
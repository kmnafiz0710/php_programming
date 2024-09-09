
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variable</title>
</head>
<body>

<?php
echo "<h2> Super Global VAriable </h2> <br>";
?>    
<a href="www.w3schools.com/php/php_superglobals.asp">W3 School Link</a>
</body>
</html>


<?php

echo "<br>";

echo "There are 9 types of super global variable.
<br>_GLOBALS<br>
_SERVER<br>
_REQUEST<br>
_POST<br>
_GET<br>
_FILES<br>
_ENV<br>
_COOKIE<br>
_SESSION";


echo "<h3>Globals</h3> <br>";

$name = "Nafiz <br>";
$gender ="Male <br>";

function bio(){
    echo $GLOBALS['name'];
    echo $GLOBALS['gender'];
}

bio();


echo "<h3>Sarver</h3> <br>";

echo "Server Address- ".$_SERVER['SERVER_ADDR']; // To check server address.
echo "<br>";
echo "Server Name- ".$_SERVER['SERVER_NAME']; // To check server name.
echo "<br>";
echo "Server Software- ".$_SERVER['SERVER_SOFTWARE']; // To check server Software.
echo "<br>";
echo "Server Protocol- ".$_SERVER['SERVER_PROTOCOL']; // To check server Protocol.
echo "<br>";
echo "Server Port- ".$_SERVER['SERVER_PORT']; // To check server Port.
echo "<br>";
echo "User IP Address- ".$_SERVER['REMOTE_ADDR']; // To check server User IP Address.
echo "<br>";
echo "User IP Port- ".$_SERVER['REMOTE_PORT']; // To check server User IP Port.
echo "<br>";
echo "Server Script Name- ".$_SERVER['SCRIPT_NAME']; // To check server Script Name.
echo "<br>";
echo " HTTP HOst- ".$_SERVER['HTTP_HOST']; // To check server hpst.
echo "<br>";
echo "Server Admin- ".$_SERVER['SERVER_ADMIN']; // To check server admin.
echo "<br>";
echo "PHP self Address- ".$_SERVER['PHP_SELF']; // To check php selp address.
echo "<br>";



echo "<h3>REQUEST</h3> <br>";
echo "<br>";

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registration</h3>
    <form action="<?php// $_SERVER['PHP_SELF']; ?> " method="POST">
        <lebel for="username">Username</lebel>
        <input type="text" name="username">
        <button type="submit">Submit </button>

    </form>
    
    <?php
    // IF ($_SERVER['REQUEST_METHOD']=="POST"){
    //     echo "Button Submitted";
    // }
    
    ?>


</body>
</html>
 -->








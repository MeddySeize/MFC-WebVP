<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "WebVp";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connexion échouée: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
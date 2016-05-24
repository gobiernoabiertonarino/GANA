<?php
require("bitly.php");

$bitly = new Bitly("jobga", "R_a07d67a5027b4e7abdc608834a9fa7de");
$urlmin = $bitly->shorten("http://blog.unijimpe.net/utilizar-recaptcha-con-php/");
echo $urlmin;
?>
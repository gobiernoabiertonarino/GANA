<?php 
class Bitly {
var $path;
var $user;
var $key;
function Bitly ($_user, $_key) {
$this->path = "http://api.bit.ly/v3/";
$this->user = $_user;
$this->key = $_key;
}
function shorten($url) {
$temp = $this->path."shorten?login=".$this->user."&apiKey=".$this->key."&uri=".$url."&format=txt";
$data = file_get_contents($temp);
return $data;
}
function expand($url) {
$temp = $this->path."expand?login=".$this->user."&apiKey=".$this->key."&shortUrl=".$url."&format=txt";
$data = file_get_contents($temp);
return $data;
}
}

$bitly = new Bitly("joobga@gmail.com", "aea52b713d78d04dd2826947cda0a3fd31fe3a4a");
$urlmin = $bitly->shorten("http://blog.unijimpe.net/utilizar-recaptcha-con-php/");
echo $urlmin; // imprime: http://bit.ly/cMea1K
?> 

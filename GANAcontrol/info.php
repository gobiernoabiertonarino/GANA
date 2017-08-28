<?php 

$gana= mysql_connect('localhost','','')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
mysql_select_db('database', $congana)or die ('Error al seleccionar la Base de Datos: '.mysql_error());



setlocale(LC_TIME, 'es_CO');
mysql_query ("SET NAMES 'utf8'",$gana);
?>


<?php
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Septiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";
?>

<?php
function nmes($numes){
if ($nmes=="01") $mes="Enero";
if ($nmes=="02") $mes="Febrero";
if ($nmes=="03") $mes="Marzo";
if ($nmes=="04") $mes="Abril";
if ($nmes=="05") $mes="Mayo";
if ($nmes=="06") $mes="Junio";
if ($nmes=="07") $mes="Julio";
if ($nmes=="08") $mes="Agosto";
if ($nmes=="09") $mes="Septiembre";
if ($nmes=="10") $mes="Octubre";
if ($nmes=="11") $mes="Noviembre";
if ($nmes=="12") $mes="Diciembre";
return $mes;
}
?>

<?php


function decUTF8($cadena){
 
    $buscar = array(
        'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ă', 'Ą',
        'Ç', 'Ć', 'Č', 'Œ',
        'Ď', 'Đ',
        'à', 'â', 'ã', 'ä', 'å', 'æ', 'ă', 'ą',
        'ç', 'ć', 'č', 'œ',
        'ď', 'đ',
        'È', 'Ê', 'Ë', 'Ę', 'Ě',
        'Ğ',
        'Ì',  'Î', 'Ï', 'İ',
        'Ĺ', 'Ľ', 'Ł',
        'è', 'é', 'ê', 'ë', 'ę', 'ě',
        'ğ',
        'ì', 'í', 'î', 'ï', 'ı',
        'ĺ', 'ľ', 'ł',
         'Ń', 'Ň',
        'Ò', 'Ô', 'Õ', 'Ö', 'Ø', 'Ő',
        'Ŕ', 'Ř',
        'Ś', 'Ş', 'Š',
        'ñ', 'ń', 'ň',
        'ò', 'ô', 'ö', 'ø', 'ő',
        'ŕ', 'ř',
        'ś', 'ş', 'š',
        'Ţ', 'Ť',
        'Ù', 'Û', 'Ų', 'Ü', 'Ů', 'Ű',
        'Ý', 'ß',
        'Ź', 'Ż', 'Ž',
        'ţ', 'ť',
        'ù', 'û', 'ų', 'ü', 'ů', 'ű',
        'ý', 'ÿ',
        'ź', 'ż', 'ž',
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р',
        'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'р',
        'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
        'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я' ,'?', 'A³', 'A²', 'A¬', 'A“', 'Aº', 'A±', 'A©', 'a‘'
        );
 
    $remplazar = array(
        'A', 'A', 'A', 'A', 'A', 'A', 'AE', 'A', 'A',
        'C', 'C', 'C', 'CE',
        'D', 'D',
        'a', 'a', 'a', 'a', 'a', 'ae', 'a', 'a',
        'c', 'c', 'c', 'ce',
        'd', 'd',
        'E', 'E', 'E', 'E', 'E',
        'G',
        'I', 'I', 'I', 'I',
        'L', 'L', 'L',
        'e', 'e', 'e', 'e', 'e', 'e',
        'g',
        'i', 'i', 'i', 'i', 'i',
        'l', 'l', 'l',
        'N', 'N',
        'O', 'O', 'O', 'O', 'O', 'O',
        'R', 'R',
        'S', 'S', 'S',
        'n', 'n', 'n',
        'o', 'o', 'o', 'o', 'o',
        'r', 'r',
        's', 's', 's',
        'T', 'T',
        'U', 'U', 'U', 'U', 'U', 'U',
        'Y', 'Y',
        'Z', 'Z', 'Z',
        't', 't',
        'u', 'u', 'u', 'u', 'u', 'u',
        'y', 'y',
        'z', 'z', 'z',
        'A', 'B', 'B', 'r', 'A', 'E', 'E', 'X', '3', 'N', 'N', 'K', 'N', 'M', 'H', 'O', 'N', 'P',
        'a', 'b', 'b', 'r', 'a', 'e', 'e', 'x', '3', 'n', 'n', 'k', 'n', 'm', 'h', 'o', 'p',
        'C', 'T', 'Y', 'O', 'X', 'U', 'u', 'W', 'W', 'b', 'b', 'b', 'E', 'O', 'R',
        'c', 't', 'y', 'o', 'x', 'u', 'u', 'w', 'w', 'b', 'b', 'b', 'e', 'o', 'r' ,'ñ', 'ó', 'ó', 'í', 'ó', 'ú', 'ñ' ,'é', 'ñ'
        );
 
    return str_replace($buscar, $remplazar, $cadena);
    
}
?>
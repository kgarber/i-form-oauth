<?
require 'zerion_autoload.php';

use iForm\Auth\iFormTokenResolver;

//instantiate iFormTokenResolver with required parameters and call getToken() method

$url = "https://servername.iformbuilder.com/exzact/api/oauth/token";
$client = "XXXXXX";
$secret = "XXXXXXX";

$token = (new Iform\Auth\iFormTokenResolver($url, $client, $secret))->getToken();
echo $token."\n";
?>

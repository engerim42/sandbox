<?php
// Library installed from PEAR
require_once 'XML/RPC2/Client.php';
$apikey_prod = '24-char Production Key';
$apikey_ote = '24-char OT&E Key';

$contact_api_prod = XML_RPC2_Client::create(
    'https://rpc.gandi.net/xmlrpc/',
    array( 'prefix' => 'contact.', 'sslverify' => False )
);

$contact_api_ote = XML_RPC2_Client::create(
    'https://rpc.ote.gandi.net/xmlrpc/',
    array( 'prefix' => 'contact.', 'sslverify' => False )
);

$result_ote = $contact_api_ote->list($apikey_ote);
$result_prod = $contact_api_prod->list($apikey_prod);

echo "Production:\n";
var_dump($result_prod);

echo "OT&E:\n";
var_dump($result_ote);

?>

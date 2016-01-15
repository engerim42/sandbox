<?php
$apikey = 'MY-GANDI-API-KEY';
// Library installed from PEAR
require_once 'XML/RPC2/Client.php';

$domain_api = XML_RPC2_Client::create(
    'https://rpc.gandi.net/xmlrpc/',
    array( 'prefix' => 'domain.', 'sslverify' => False )
);

$domain_spec = array(
    'owner' => 'XX1234-GANDI',
    'admin' => 'XX1234-GANDI',
    'bill' => 'XX1234-GANDI',
    'tech' =>'XX1234-GANDI',
    'extra' => array('x-lv_idnumber' => 'C1234432323'),
    'nameservers' => array('a.dns.gandi-ote.net', 'b.dns.gandi-ote.net',
                           'c.dns.gandi-ote.net'),
    'duration' => 1);

$op = $domain_api->__call('create', array($apikey, 'test-mydomain.lv',$domain_spec));

// check $op return to retrieve the operation ID, i.e. var_dump($op);

?>

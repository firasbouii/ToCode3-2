<?php
 require_once('lib/nusoap.php'); 
 require_once('dbconn.php');
 $server = new nusoap_server();
function Somme()
{
  global $dbconn;
	$res = $dbconn->query("SELECT sum(solde_transaction) as somme FROM caisse");
  $data = $res->fetch(PDO::FETCH_ASSOC);
  return $data["somme"];
  $dbconn = null;
}

function ConversionDNTEuro($montant)
{
  $convert=$montant/3.3;
  return ($convert);
}

$server->configureWSDL('myname', 'http://www.mynamespace.com');

    $server->register('Somme',
		array(),  //input parameter
		array('data' => 'xsd:float'),  //output
		'http://www.mynamespace.com',   //namespace
    'http://www.mynamespace.com#Somme', //soapaction           
    ); 

    $server->register('ConversionDNTEuro',
		array('montant' => 'xsd:float'),  //input parameter
		array('convert' => 'xsd:float'),  //output
		'http://www.mynamespace.com',   //namespace
    'http://www.mynamespace.com#ConversionDNTEuro', //soapaction           
    ); 

$server->service(file_get_contents("php://input"));
?>
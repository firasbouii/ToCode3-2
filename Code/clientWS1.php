<?php
	require_once('lib/nusoap.php');
	$error  = '';
    $result= '';
    $result1=array();
	$wsdl = "http://localhost/soc/Firas/ws1.php?wsdl";
    $wsdl1="https://www.dataaccess.com/webservicesserver/NumberConversion.wso?WSDL";
		$client = new nusoap_client($wsdl, true);
        $client1= new nusoap_client($wsdl1,true);
		$err = $client->getError();
        $err1 = $client1->getError();
		if ($err) {
			echo '<h2>Constructor error Client</h2>' . $err ;
			exit();
		}
        if ($err1) {
			echo '<h2>Constructor error Client 1</h2>' . $err1 ;
			exit();
		}
		try {
			$result = $client->call('Somme',array());
            $result = json_decode($result);
            $conv =(int) $client->call('ConversionDNTEuro',array($result));
            $conv=json_encode($conv);
            $result1 = $client1->call('NumberToWords', array('ubiNum'=>$conv));
            $result1=json_encode($result1,true);
            $result1=json_decode($result1);

		}catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calcule Totale Caisse Banque Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Somme de la caisse est:</h2>
        <?php echo $result; ?>
        <h2>En Euro ça donne:</h2>
        <?php echo $conv; ?>
        <h2>En lettre ça donne:</h2>
        <?php echo $result1->NumberToWordsResult ?>


    </div>

</body>

</html>
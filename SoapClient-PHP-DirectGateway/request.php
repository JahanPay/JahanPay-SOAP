<?php
$api = 'gtd12123u7';
$amount = 100; // toman
$callback = 'http://example.com/verify.php';
$order_id = 1;

$client = new SoapClient("http://www.jpws.me/directservice?wsdl");
$res = $client->requestpayment($api , $amount , $callback , $order_id );

if($res['result']==1)
{
	
	
	echo "<meta charset=utf-8>شناسه پيگيري در جهان پي :".$res['au'];
	$au = $res['au']; // dar database save conid b hamrahe order_id , amount
	echo $res['form'];
}
else
{
	echo '<meta charset=utf-8><pre>';
	$res = array_map('urldecode',$res);
	print_r($res);
}
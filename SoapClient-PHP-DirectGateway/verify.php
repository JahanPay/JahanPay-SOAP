<?php
$api = 'gtd12123u7';
$amount = 100; // toman

$order_id = 1;

$au = '....'; // az database begirid


$client = new SoapClient("http://www.jpws.me/directservice?wsdl");
$res = $client->verification($api , $amount , $au , $order_id, $_POST + $_GET );
if($res['result']==1)
{
	echo "پيگيري بانک ". $res['bank_au'];
}
else
{
	echo '<meta charset=utf-8><pre>';
	$res = array_map('urldecode',$res);
	print_r($res);
}
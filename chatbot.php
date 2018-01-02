<?php

$accessToken = "EAAOUo3xLatgBAIz6I6rUGyknetB1uOsCgfIQQN9Oi3nd0aouI21kKZCknXtZBrZB6FcvSxhzWZBF2vgM0XZAeb2vdYHByG3wcTTSogqiJUYzbV33CGIiCKOAol88Ah0vmyJP1BJPerc8QBDP8vfzSO5PxgZBZB73xkUfRzorxW7ZCUYE6Q8GA4D2" ;


if(isset($_REQUEST['hub_challenge']))
{
	$c = $_REQUEST['hub_challenge'];
	$v= $_REQUEST['hub_verify_token'];
}
if($v=="abc123")
{
	echo $c ;
}


$input = json_decode(file_get_contents('php://input') ,true) ;


$userID = $input['entry'][0]['messaging'][0]['sender']['id'] ;
$message = $input['entry'][0]['messaging'][0]['message']['text'] ;



$url ="https://graph.facebook.com/v2.6/me/messages?access_token=$accessToken";




$jsonData= "{
	'recipient':{
    'id': $userID
  },
  'message':{
    'text':'hello, dude!'
  }

}" ;


$ch =  curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true) ;
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData) ;
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']) ;

if(!empty($input['entry'][0]['messaging'][0]['message']))
{
	curl_exec($ch) ;
}







?>
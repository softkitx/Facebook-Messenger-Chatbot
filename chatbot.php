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


$messagingArray = $input['entry'][0]['messaging'][0];
if(isset($messagingArray['postback']))
{
	if($messagingArray['postback']['payload']=="GET_STARTED")
	{
		sendTextMessage("hello, there", $userID,$accessToken) ;
		die() ;
	}
}
$message = $input['entry'][0]['messaging'][0]['message']['text'] ;
/*
$reply = "I, dont understnad . Asl me to tell a joke !" ;
if(preg_match('/(send|text|tell|.*?)(.*?)joke/', $message))
{
	$res = json_decode(file_get_contents('http://api.icndb.com/jokes/random'), true);
	$reply = $res['value']['joke'] ;

	// if you want an text msg -? remove the whole attachment and put the 'text' : '$reply'
	//or if you want an image reply . it is shown theere only

}
*/
function sendTextMessage($message,$userID,$accessToken)
{
	$url ="https://graph.facebook.com/v2.6/me/messages?access_token=$accessToken";

	$jsonData= "{
		'recipient':{
	    'id': $userID
	  },
	  'message':{
				'text' : '$message'
			}	
	}" ;


	$ch =  curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true) ;
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData) ;
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']) ;
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false) ;



	
		curl_exec($ch) ;
	

	$errors = curl_error($ch) ;
	$response = curl_getinfo($ch,CURLINFO_HTTP_CODE) ;

	var_dump($errors);
	var_dump($response) ;



}

?>
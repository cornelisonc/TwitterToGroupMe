<?php

require_once('TwitterAPIExchange.php');
require_once('Variables.php');

$settings = array(
	'oauth_access_token' 		=> $oauth_access_token,
	'oauth_access_token_secret'	=> $oauth_access_token_secret,
	'consumer_key'				=> $consumer_key,
	'consumer_secret'			=> $consumer_secret
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=CoMoNSCoder&count=1';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$tweet = $twitter->setGetfield($getfield)
				 ->buildOauth($url, $requestMethod)
				 ->performRequest();

$obj = json_decode($tweet);
$tweet_text = ($obj['0']->text);

echo $tweet_text;

// Start curl posting things
$ch = curl_init();
$post = json_encode(array(
	'bot_id' => $bot_id,
	'text'	 => $tweet_text
	)
);

$arr = array();
array_push($arr, 'Content-Type: application/json; charset=utf-8');

curl_setopt($ch, CURLOPT_HTTPHEADER, $arr);
curl_setopt($ch, CURLOPT_URL, 'https://api.groupme.com/v3/bots/post');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

curl_exec($ch);
curl_close($ch);
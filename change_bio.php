<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// twitter auth things
const CONSUMER_KEY = "you";
const CONSUMER_SECRET = "must";
$access_token = "add";
$access_token_secret = "those";

// where are the sentences?
$biosFile = 'bios';

// pick a random one (this excludes .files and .. folder)
$file = file($biosFile);
$randIndex = array_rand($file);
$description = $file[$randIndex];

// connect to twitter
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);

// change the user description
$content = $connection->post('account/update_profile', ['description' => $description]);
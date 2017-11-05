<?php
require_once('./vendor/autoload.php');

// Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;

$channel_token = 'qkemiHYLq1Go2vUvCixhJFKeTfxGgxd57LkiruFfPV58idgTkUbL7Tn7HUtluFRI8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQ2/doT8zSakFQ7jLIfeakP0NGR6NLOqMZPM+y71siy6wdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'e60fa284733b2a846a6309e8bc3df90e';

// Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true);

if (!is_null($events['events'])) {
   foreach ($events['events'] as $event) {
       $replyToken = $event['replyToken'];
       $ask = $event['message']['text'];
       switch(strtolower($ask)) {
               case 'm':
                  $respMessage = 'What sup man. Go away!';
               break;
               case 'f':
                  $respMessage = 'Love you lady.';
               break;
               default:
                  $respMessage = 'What is your sex? M or F';
               break;
       }
       $httpClient = new CurlHTTPClient($channel_token);
       $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
       
       $textMessageBuilder = new TextMessageBuilder($respMessage);
       $response = $bot->replyMessage($replyToken, $textMessageBuilder);
       
   }
}    

echo "OK";

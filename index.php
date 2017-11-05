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
       if ($event['type'] == 'message' && $event['message']['type'] == 'text')
       $replyToken = $event['replyToken'];
      
      switch($event['message']['text']) { 
         case 'tel': $respMessage = '089-5124512'; 
            break; 
         case 'address': $respMessage = '99/451 Muang Nonthaburi'; 
            break; 
         case 'boss': $respMessage = '089-2541545'; 
            break; 
         case 'idcard': $respMessage = '5845122451245'; 
            break; 
         default: 
            break; 
      }
      
       $httpClient = new CurlHTTPClient($channel_token);
       $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
       
       $textMessageBuilder = new TextMessageBuilder($respMessage);
       $response = $bot->replyMessage($replyToken, $textMessageBuilder);
       
   }
}    

echo "OK";

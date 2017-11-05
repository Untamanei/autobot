<?php
/**
 * Use for return easy answer.
 */

require_once('./vendor/autoload.php');

use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;

$channel_token = 'qkemiHYLq1Go2vUvCixhJFKeTfxGgxd57LkiruFfPV58idgTkUbL7Tn7HUtluFRI8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQ2/doT8zSakFQ7jLIfeakP0NGR6NLOqMZPM+y71siy6wdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'e60fa284733b2a846a6309e8bc3df90e';

// Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true);

if (!is_null($events['events'])) {

	// Loop through each event
	foreach ($events['events'] as $event) {
    
        // Line API send a lot of event type, we interested in message only.
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {

            // Get replyToken
            $replyToken = $event['replyToken'];
	    $ans = $event['message']['text'];
			
            switch(strtolower($ans)) {          
                case 'tel':
                    $respMessage = '089-5124512';
                    break;
                case 'address':
                    $respMessage = '99/451 Muang Nonthaburi';
                    break;
                case 'boss':
                    $respMessage = '089-2541545';
                    break;
                case 'help':
                    $respMessage = 'นายช่างดูแลระบบ 2 ระบบ\n1.PRU\n2.LPG\n-----------------\nWi : work instruction\nEx. Wi PRU\n\nPid = piping and instrument diagram\nEx. Pid PRU\n\nSpec = รายละเอียดอุปกรณ์\nEx. Spec PRU PCV105\n\nStock = ตรวจเช็คจำนวอุปกรณ์\nEx. Stock PRU PCV105\n\nBuy = สั่งซื้ออุปกรณ์\nEx. Buy PRU PCV105\n\nTroubleshooting = ปัญหา\nEx. Troubleshooting PRU';
                    break;
                default:
		    $respMessage = 'พิมพ์ help เพื่อหาคำสั่งของนายช่าง';
		    $respMessage1 = 'อยู่ระหว่างการปรับปรุงระบบ';
		    $respMessage2 = 'อยู่ระหว่างการปรับปรุงระบบ';
		    $respMessage3 = 'อยู่ระหว่างการปรับปรุงระบบ';
		    $respMessage4 = 'อยู่ระหว่างการปรับปรุงระบบ';    
                    break;
            }

            $httpClient = new CurlHTTPClient($channel_token);
            $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));

            $textMessageBuilder = new TextMessageBuilder($respMessage , $respMessage1 , $respMessage2 , $respMessage3 , $respMessage4);
            $response = $bot->replyMessage($replyToken, $textMessageBuilder);

		}
	}
}

echo "OK";


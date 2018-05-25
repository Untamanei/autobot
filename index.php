<?php
 
$strAccessToken = "qkemiHYLq1Go2vUvCixhJFKeTfxGgxd57LkiruFfPV58idgTkUbL7Tn7HUtluFRI8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQ2/doT8zSakFQ7jLIfeakP0NGR6NLOqMZPM+y71siy6wdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "Wi Boiler"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.เปิดระบบไฟฟ้า\n2.นำสาย Flexible Hose มาต่อเข้ากับหัว Quick Connect\n3.เปิดโปรแกรม LabView เพื่อเปิด Solenoid Valve\4.เปิดระบบปั๊มน้ำ Feed\5.เปิดเครื่อง Boiler\n6.รอ Boiler ทำ Pressure ได้ตามที่ตั้งไว้\n7.เปิดวาล์วทางด้าน Steam เพื่อนำไปใช้งานต่อไป\n";
  }

else if($arrJson['events'][0]['message']['text'] == "Pid boiler"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload71/UD7JU0BieuuO.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload71/UD7JU0BieuuO.jpg";
  }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>

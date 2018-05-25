<?php
 
$strAccessToken = "qkemiHYLq1Go2vUvCixhJFKeTfxGgxd57LkiruFfPV58idgTkUbL7Tn7HUtluFRI8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQ2/doT8zSakFQ7jLIfeakP0NGR6NLOqMZPM+y71siy6wdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "Wi PRUU"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.นำสาย Flexible Hose มาต่อเข้ากับหัว Quick Connect\n2.นำสายก๊าซมาต่อเข้ากับหัว Quick Connect ที่นำไปใช้งาน\n3.เปิดวาล์วก่อน Vaporizing Regulator ช้า ๆ เพื่อไม่ให้เกิดความเสียหาย\n4.ปรับแรงดัน High Flow Regulator ตามการใช้งาน\n5.เปิดวาล์วหลัง High Flow Regulator\n6.เปิดสวิทซ์ Heater และ Mass Flow Meter\n7.เปิดวาล์วก๊าซนำไปใช้งาน\n8.เมื่อใช้งานเสร็จปิดวาล์วและ Vent ก๊าซออกระบบให้หมด";
  }

else if($arrJson['events'][0]['message']['text'] == "Wi burner training"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.เสียบ Power Plug\n2.เปิดสวิทซ์ On Breaker , Display Power และ NI Power ที่ Panel\n3.เลือกระบบควบคุมแรงดันเชื้อเพลิงที่ชุด Burner Training Kits ที่วาล์ว 3BV-105 และ 3BV-108\n4.เลือกระบบควบคุมอัตราส่วนระหว่างอากาศกับเชื้อเพลิงที่ชุด Burner Training Kits ที่วาล์ว 3BV-122 และ 3BV-127\n5.เปิดวาล์วเชื้อเพลิง BV-101 และ BV-120\n6.เปิดโปรแกรม LabVIEW\n7.เลือกระบบควบคุมแรงดันเชื้อเพลิงและระบบควบคุมอัตราส่วนระหว่างอากาศกับเชื้อเพลิงที่โปรแกรมตามชุด Burner Training Kits\n8.On Blower และ Solenoid Valve\n9.บิดสวิทซ์ Start ที่ Panel ไปที่ ON\n";
  }

  else if($arrJson['events'][0]['message']['text'] == "Wi LPG"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.ตรวจเช็คการเดินเครื่องเสร็จ\n2.แหล่งจ่ายไฟฟ้า : ตรวจเช็ค Power Lamp\n3.เช็คอุณหภูมิน้ำ : ประมาณ 60-65 oC ใช้เวลาประมาณ 30 -40 นาที\n4.เปิดวาล์วทางเข้าหม้อต้มแก๊ส : เปิดช้า ๆ (ในกรณีรีบเปิดอุปกรณ์ปิดกั้นจะทำงาน)\n5.เช็คเกจวัดความดันหม้อต้มแก๊ส : เปรียบเทียบกับความดันของภาชนะและถังเก็บ\n6.เปิดวาล์วทางออกหม้อต้มแก๊ส : เปิดช้า ๆ (ในกรณีรีบเปิด อุปกรณ์ปิดกั้นจะทำงาน)\n7.ใช้แก๊ส";
  }

  else if($arrJson['events'][0]['message']['text'] == "Pid PRU"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  //$arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload43/uNQ4LdGD2yyd.jpg";
  //$arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload43/uNQ4LdGD2yyd.jpg";
  //$arrPostData['messages'][0]['type'] = "text";
  //$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=0B-XvT8qgmPvjU0lHcURybjV5RG8";
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload43/49FrxSRkmDsj.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload43/49FrxSRkmDsj.jpg";
  }

  else if($arrJson['events'][0]['message']['text'] == "Pid burner training"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload55/1xsYtUVMIVS5.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload55/1xsYtUVMIVS5.jpg";
  }

  else if($arrJson['events'][0]['message']['text'] == "Pid LPG"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload43/TS0AptL2oFAU.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload43/TS0AptL2oFAU.jpg";
  }
 
  else if($arrJson['events'][0]['message']['text'] == "Spec burner training BV-120"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n================\nBall Valve\nMaximum Inlet : 5 bar\nTemperature Range : -20...60 oC\n--------------\nInstall date : 01/2017\n--------------\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "Spec PRU PCV105"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n================\nVaporizing Regulator\nMaximum Inlet : 3500 psig\nPressure Control Range : 500 psi\nHeater : 200 W\nPower : 240 V\nTemperature Controller 104-193 oC\nCv : 0.06\n--------------\nInstall date : 12/2016\n--------------\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "Stock PRU PCV105"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "Buy PRU PCV105"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : AVR4SP5240EHX\nBrand : Parker\nLead Time : 10-12 weeks\nCost : 59,300 Baht\nSupplier : Fint Fluid\n\nSaleperson\n-------------\nSippakorn\nE-mail : sippakorn@fintfluid.com\nTel : 0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "Spec LPG 16"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n================\nHigh Pressure Regulator\nFluid : LP-Gas\nPressure Control Range : 25-50 psi\nCapacity : 12,000,000 BTU/hr. LPG\n--------------\nInstall date : 8/2017\n--------------\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "Stock LPG 16"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "Buy LPG 16"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : 1588VL\nBrand : REGO\nLead Time : 10-12 weeks\nCost : 59,300 Baht\nSupplier : CECO\n\nSaleperson\n-------------\nSippakorn\nE-mail : ceco@cecogas.com\nTel : 027227929";
  }

  else if($arrJson['events'][0]['message']['text'] == "Troubleshooting PRU"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.มีน้ำแข็งเกาะบริเวณ Vaporizing Regulator มาก\n -	ไม่ได้เปิด Heater\n -	อัตราการไหลมากเกินที่กำหนดไว้\n2.ได้กลิ่นแก๊ส\n -	ตรวจสอบรอยรั่วที่ข้อต่อต่าง ๆ\n -	หยุดการ operate ทันที";
  }

  else if($arrJson['events'][0]['message']['text'] == "Troubleshooting burner training"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.Low gas pressure\n -	ตรวจสอบก๊าซในระบบ\n -	ตรวจสอบวาล์วก๊าซ\n2.ได้กลิ่นแก๊ส\n -	ตรวจสอบรอยรั่วที่ข้อต่อต่าง ๆ\n -	หยุดการ operate ทันที";
  }

  else if($arrJson['events'][0]['message']['text'] == "Troubleshooting LPG"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.ความผิดปกติอุณหภูมิน้ำ\n -	ความผิดปกติแหล่งจ่ายไฟฟ้า\n -	ระดับน้ำต่ำหรือสวิตซ์ระดับน้ำเสีย\n -	ฟิวส์ถูกละลายขาด\n  -	Magnetic Contactor เสีย\n -	อุปกรณ์กำเนิดความร้อนไฟฟ้าเสีย\n2.การจ่ายแก๊สผิดปกติ\n -	วาล์วทางเข้าหม้อต้มแก๊สทำงานผิดปกติ\n -	อุณหภูมิน้ำผิดปกติ\n -	ใช้แก๊สมากกว่าปริมาณที่กำหนดไว้\n 3.มีน้ำแข็งที่ทางออกของเครื่องช่วยระเหยแก๊ส\n -	อุปกรณ์ปิดกั้นแก๊สเหลวรั่วเสีย\n 4.เบรกเกอร์ตัดไฟ\n -	เบรกเกอร์ตัด\n -	ฮีตเตอร์ขาด\n -	สวิตซ์ระดับน้ำชำรุด\n -	ไฟช็อต";
  }

  else if($arrJson['events'][0]['message']['text'] == "help"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "นายช่างดูแลระบบ 2 ระบบ\n1.PRU\n2.burner training\n3.LPG\n-----------------\nWi : work instruction\nEx. Wi PRU\n\nPid = piping and instrument diagram\nEx. Pid PRU\n\nSpec = รายละเอียดอุปกรณ์\nEx. Spec PRU PCV105\n\nStock = ตรวจเช็คจำนวอุปกรณ์\nEx. Stock PRU PCV105\n\nBuy = สั่งซื้ออุปกรณ์\nEx. Buy PRU PCV105\n\nTroubleshooting = ปัญหา\nEx. Troubleshooting PRU";  
  }

  else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ตรวจสอบตัวสะกด\nตัวพิมพ์เล็กพิมพ์ใหญ่\nพิมพ์ help เพื่อหาคำสั่งของนายช่าง";
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

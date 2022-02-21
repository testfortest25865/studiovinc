<?php

/* https://api.telegram.org/bot5012242379:AAFPNwideM2aggQVApjAuykV3QtQr1VC1ww/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$tel = $_POST['user_tel'];
$company = $_POST['user_company'];
$token = "5012242379:AAFPNwideM2aggQVApjAuykV3QtQr1VC1ww";
$chat_id = "-666902497";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $tel,
  'Компания:' => $company
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank_you.html');
} else {
  echo "Error";
}
?>
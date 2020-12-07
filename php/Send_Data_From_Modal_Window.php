<?php
//Получаем данные
$data_1 = $_POST[data_1];
$data_2 = $_POST[data_2];
$data_3 = $_POST[data_3];
$id_order = $_POST[id_order];
$str_id_order;

if($id_order == 'form_001')$str_id_order = "Фруктовый рай";
if($id_order == 'form_002')$str_id_order = "Сладкая жизнь (mini)";
if($id_order == 'form_003')$str_id_order = "Сладкая жизнь (maxi)";
if($id_order == 'form_004')$str_id_order = "Овощное наслаждение";
if($id_order == 'form_005')$str_id_order = "Fruit Box (summer)";
if($id_order == 'form_006')$str_id_order = "Love Story";
if($id_order == 'form_007')$str_id_order = "Плюшевая сказка (blue)";
if($id_order == 'form_008')$str_id_order = "Плюшевая сказка (red)";
if($id_order == 'form_009')$str_id_order = "Плюшевая сказка (violet)";
if($id_order == 'form_010')$str_id_order = "Фруктовые фантазии";
if($id_order == 'form_011')$str_id_order = "Карнавал вкуса";
if($id_order == 'form_012')$str_id_order = "Fruit Box (winter)";
if($id_order == 'form_013')$str_id_order = "Сладкие грёзы";
if($id_order == 'form_014')$str_id_order = "Сладкий этюд";
if($id_order == 'form_015')$str_id_order = "Сказочный бал";
if($id_order == 'form_016')$str_id_order = "Особый случай";
if($id_order == 'form_017')$str_id_order = "Царский подарок";
if($id_order == 'form_018')$str_id_order = "Тайное свидание";
if($id_order == 'form_019')$str_id_order = "Сердце ангела";
if($id_order == 'form_020')$str_id_order = "Палитра любви";
if($id_order == 'form_021')$str_id_order = "Розовая мечта";

$message= "Имя клиента: ".$data_1."\nТелефон клиента: ".$data_2."\nИдентификатор заказа: (".$id_order.") ".$str_id_order."\nПожелания к заказу: ".$data_3;
 
mail('rich-gift2015@yandex.ru', 'Заказ от клиента (каталог)', $message);

/*
* функция передачи сообщения
*/

function send($host, $port, $login, $password, $phone, $text, $sender = false, $wapurl = false )
{
    $fp = fsockopen($host, $port, $errno, $errstr);
    if (!$fp) {
        return "errno: $errno \nerrstr: $errstr\n";
    }
    fwrite($fp, "GET /messages/v2/send/" .
        "?phone=" . rawurlencode($phone) .
        "&text=" . rawurlencode($text) .
        ($sender ? "&sender=" . rawurlencode($sender) : "") .
        ($wapurl ? "&wapurl=" . rawurlencode($wapurl) : "") .
        "  HTTP/1.0\n");
    fwrite($fp, "Host: " . $host . "\r\n");
    if ($login != "") {
        fwrite($fp, "Authorization: Basic " .
            base64_encode($login. ":" . $password) . "\n");
    }
    fwrite($fp, "\n");
    $response = "";
    while(!feof($fp)) {
        $response .= fread($fp, 1);
    }
    fclose($fp);
    list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
    return $responseBody;
}

/* использование функции передачи сообщения */
send("api.smsfeedback.ru", 80, "Serik-it", "tm36Kl5Qn", "79044419155", "Заказ от клиента (каталог)", "Rich-Gift");

?>
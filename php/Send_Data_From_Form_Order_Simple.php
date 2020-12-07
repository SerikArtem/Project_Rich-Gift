<?php
$name_client = $_POST[data_1];
$phone_client = $_POST[data_2];
$text_client = $_POST[data_3];
$message= "Имя клиента: ".$name_client."\nТелефон клиента: ".$phone_client."\nЗаказ: ".$text_client;
 
mail('rich-gift2015@yandex.ru', 'Заказ от клиента (обычная форма заказа)', $message);

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
send("api.smsfeedback.ru", 80, "Serik-it", "tm36Kl5Qn", "79044419155", "Заказ от клиента (обычная форма заказа)", "Rich-Gift");

?>

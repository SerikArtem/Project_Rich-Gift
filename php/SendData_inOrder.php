<?php
session_start();

$name_client = $_POST[name_client];
$phone_client = $_POST[phone_client];
$text_client = $_POST[text_client];
$product_client = '';
$cost = 0;
$totalCost = 0;
$nameFile = '';

if(!empty($_SESSION)){
	foreach ( $_SESSION as $key => $value ) {
		switch($key)
		{
		   	case prod1: 
		   		$product_client .= '  Фруктовый рай('.$value.'шт.)  '; 
		   		$cost = 3499*$value; 
	     		$totalCost += $cost;
		   		break;
			case prod2: 
				$product_client .= '  Сладкая жизнь(mini)('.$value.'шт.)  '; 
				$cost = 2399*$value; 
	     		$totalCost += $cost;
				break;
			case prod3: 
				$product_client .= '  Сладкая жизнь(maxi)('.$value.'шт.)  '; 
				$cost = 3199*$value; 
	     		$totalCost += $cost;
				break;
			case prod4: 
				$product_client .= '  Овощное наслаждение('.$value.'шт.)  '; 
				$cost = 3199*$value; 
	     		$totalCost += $cost;
				break;
			case prod5: 
				$product_client .= '  Fruit Box (summer)('.$value.'шт.)  '; 
				$cost = 2999*$value; 
	     		$totalCost += $cost;
				break;
			case prod6: 
				$product_client .= '  Love Story('.$value.'шт.)  '; 
				$cost = 2099*$value; 
	     		$totalCost += $cost;
				break;
			case prod7: 
				$product_client .= '  Плюшевая сказка (blue)('.$value.'шт.)  '; 
				$cost = 1799*$value; 
	     		$totalCost += $cost;
				break;
			case prod8: 
				$product_client .= '  Плюшевая сказка (red)('.$value.'шт.)  '; 
				$cost = 1799*$value; 
	     		$totalCost += $cost;
				break;
			case prod9: 
				$product_client .= '  Плюшевая сказка (violet)('.$value.'шт.)  '; 
				$cost = 1799*$value; 
	     		$totalCost += $cost;
				break;
			case prod10: 
				$product_client .= '  Фруктовые фантазии('.$value.'шт.)  '; 
				$cost = 2599*$value; 
	     		$totalCost += $cost;
				break;
			case prod11: 
				$product_client .= '  Карнавал вкуса('.$value.'шт.)  '; 
				$cost = 1999*$value; 
	     		$totalCost += $cost;
				break;
			case prod12: 
				$product_client .= '  Fruit Box (winter)('.$value.'шт.)  '; 
				$cost = 2399*$value; 
	     		$totalCost += $cost;
				break;
			case prod13: 
				$product_client .= '  Сладкие грёзы('.$value.'шт.)  '; 
				$cost = 1999*$value; 
	     		$totalCost += $cost;
				break;
			case prod14: 
				$product_client .= '  Сладкий этюд('.$value.'шт.)  '; 
				$cost = 3449*$value; 
	     		$totalCost += $cost;
				break;
			case prod15: 
				$product_client .= '  Сказочный бал('.$value.'шт.)  '; 
				$cost = 1999*$value; 
	     		$totalCost += $cost;
				break;
			case prod16: 
				$product_client .= '  Особый случай('.$value.'шт.)  '; 
				$cost = 8799*$value; 
	     		$totalCost += $cost;
				break;
			case prod17: 
				$product_client .= '  Царский подарок('.$value.'шт.)  '; 
				$cost = 17999*$value; 
	     		$totalCost += $cost;
				break;
			case prod18: 
				$product_client .= '  Тайное свидание('.$value.'шт.)  '; 
				$cost = 4849*$value; 
	     		$totalCost += $cost;
				break;
			case prod19: 
				$product_client .= '  Сердце ангела('.$value.'шт.)  '; 
				$cost = 10999*$value; 
	     		$totalCost += $cost;
				break;
			case prod20: 
				$product_client .= '  Палитра любви('.$value.'шт.)  '; 
				$cost = 8749*$value; 
	     		$totalCost += $cost;
				break;
			case prod21: 
				$product_client .= '  Розовая мечта('.$value.'шт.)  '; 
				$cost = 2599*$value; 
	     		$totalCost += $cost;
				break;
			default: 
				$product_client .= ' ';
				$totalCost += 0;	  	
		}
	}
}else{
	$product_client = 'Массива товаров не существует!';
	$totalCost = 'Стоимость посчитать невозможно!';
}

if (array_key_exists("name_file", $_SESSION) == true){
	$nameFile = $_SESSION['name_file'];
}else{
	$nameFile = 'Изображение не прикреплено!';
}


$message = "Имя клиента: ".$name_client."\nТелефон клиента: ".$phone_client."\nТовары клиента: ".$product_client."\nОбщая стоимость товаров: ".$totalCost." руб."."\nПожелания к заказу: ".$text_client."\nПрикреплённое изображение: ".$nameFile;
mail('rich-gift2015@yandex.ru', 'Заказ от клиента (основная форма заказа)', $message);

session_destroy();

?>

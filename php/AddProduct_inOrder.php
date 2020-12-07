<?php
session_start();

$name_product = '';

switch($_POST[id_product])
	{
	   	case prod1: $name_product = 'Фруктовый рай'; break;
	   	case prod2: $name_product = 'Сладкая жизнь (mini)'; break;
	   	case prod3: $name_product = 'Сладкая жизнь (maxi)'; break;
	   	case prod4: $name_product = 'Овощное наслаждение'; break;
	   	case prod5: $name_product = 'Fruit Box (summer)'; break;
	   	case prod6: $name_product = 'Love Story'; break;
	   	case prod7: $name_product = 'Плюшевая сказка (blue)'; break;
	   	case prod8: $name_product = 'Плюшевая сказка (red)'; break;
	   	case prod9: $name_product = 'Плюшевая сказка (violet)'; break;
	   	case prod10: $name_product = 'Фруктовые фантазии'; break;
	   	case prod11: $name_product = 'Карнавал вкуса'; break;
	   	case prod12: $name_product = 'Fruit Box (winter)'; break;
	   	case prod13: $name_product = 'Сладкие грёзы'; break;
	   	case prod14: $name_product = 'Сладкий этюд'; break;
	   	case prod15: $name_product = 'Сказочный бал'; break;
	   	case prod16: $name_product = 'Особый случай'; break;
	   	case prod17: $name_product = 'Царский подарок'; break;
	   	case prod18: $name_product = 'Тайное свидание'; break;
	   	case prod19: $name_product = 'Сердце ангела'; break;
	   	case prod20: $name_product = 'Палитра любви'; break;
	   	case prod21: $name_product = 'Розовая мечта'; break;
		default: $name_product = 'Ошибка в имени!';
	}


if (array_key_exists($_POST[id_product], $_SESSION) == true){
	$valText = $_SESSION[$_POST[id_product]]; 
	$valText++;
	$_SESSION[$_POST[id_product]] = $valText;
	echo '<script type="text/javascript">
			var valText = $("#T'.$_POST[id_product].'_count").val();
			valText++;
			$("#T'.$_POST[id_product].'_count").val(valText);
		</script>';
}else{

$_SESSION[$_POST[id_product]] = 1;
echo '<div id="'.$_POST[id_product].'_blockCPO" class="prod_CPO">
		<div id="'.$_POST[id_product].'_rem" class="float_prodCPO rem_prodCPO" onclick="return RemoveProduct(\''.$_POST[id_product].'\');">X</div>
		<div id="'.$_POST[id_product].'_img" class="float_prodCPO img_prodCPO">
			<img src="images/'.$_POST[id_product].'_order.png">
		</div>
		<div id="'.$_POST[id_product].'_name" class="float_prodCPO name_prodCPO">'.$name_product.'</div>
		<div id="'.$_POST[id_product].'_count" class="float_prodCPO count_prodCPO">
			<input id="T'.$_POST[id_product].'_count" class="Tcount_prodCPO float_count_measureCPO" type="text" value="1" onchange="return ChangeText(\''.$_POST[id_product].'\');">
			<div class="float_count_measureCPO" id="measureCPO">шт.</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear:both;"></div>
	</div>';
};

?>
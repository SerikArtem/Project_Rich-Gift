<?php
session_start();

if( isset($_SESSION[$_POST[r_productID]]) == true){
	unset($_SESSION[$_POST[r_productID]]);
	echo '<script type="text/javascript">
			$("#'.$_POST[r_productID].'_blockCPO").remove();
		</script>';
}else{
	echo "Ошибка!";
}

?>
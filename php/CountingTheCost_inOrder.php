<?php
session_start();

$totalCost = 0;
$Cost = 0;

if(!empty($_SESSION)){
	foreach ( $_SESSION as $key => $value ) {
	switch($key)
	{
	   	case prod1:
	   		$Cost = 3499*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod2: 
	     	$Cost = 2399*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod3: 
	     	$Cost = 3199*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod4: 
	     	$Cost = 3199*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod5: 
	     	$Cost = 2999*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod6: 
	     	$Cost = 2099*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod7: 
	     	$Cost = 1799*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod8: 
	     	$Cost = 1799*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod9: 
	     	$Cost = 1799*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod10: 
	     	$Cost = 2599*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod11: 
	     	$Cost = 1999*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod12: 
	     	$Cost = 2399*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod13: 
	     	$Cost = 1999*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod14: 
	     	$Cost = 3449*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod15: 
	     	$Cost = 1999*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod16: 
	     	$Cost = 8799*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod17: 
	     	$Cost = 17999*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod18: 
	     	$Cost = 4849*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod19: 
	     	$Cost = 10999*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod20: 
	     	$Cost = 8749*$value; 
	     	$totalCost += $Cost; 
	   	break;

	   	case prod21: 
	     	$Cost = 2599*$value; 
	     	$totalCost += $Cost; 
	   	break;

	  	default:		 
	      	$totalCost += 0;
	}
}
echo $totalCost.' руб.';
}else{
	echo "0 руб.";
}

?>
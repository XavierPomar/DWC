<?php 

$num1 = intval($_REQUEST['num1']);
$num2 = intval($_REQUEST['num2']);
$op   = $_REQUEST['op'];

if($op=="sum"){
	echo $num1 + $num2;
}

else if($op=="res"){
	echo $num1 - $num2;
}
else if($op=="mult"){
	echo $num1 * $num2;
}
else if($op=="divi"){
	echo $num1 / $num2;
}

?>
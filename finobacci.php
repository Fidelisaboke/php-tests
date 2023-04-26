<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Finobacci Sequence</title>
	</head>
	<body>
		<?php
	//php function for the finobacci sequence - each subsequent number is the sum of the last two preceeding numbers.
	//It's a recursive function.
	function finobacci($num){
		if($num==0){
			return 0;
		} else if($num==1){
			return 1;
		} else{
			return finobacci($num-1) + finobacci($num-2);
		}
	}

	$fin_value = finobacci(10);
	echo $fin_value;
	?>
	</body>
</html>

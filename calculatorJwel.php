<?php

 function calculator($firstNumber,$secondNumber,$operaton){//This function has Three Parameters.
 
	if($operaton=='add'){ //Add Condition
		echo 'The Add result is ';	
		return $result=$firstNumber+$secondNumber;		
	}
	
	elseif($operaton=='sub'){ //Substract Condition
		echo 'The Substruct result is   ';
		return $result=$firstNumber - $secondNumber;
	}
	
	elseif($operaton=='mul'){ //Multiplication Condition
		echo 'The Multiplacation result is  ';
		return $result=$firstNumber * $secondNumber;
	}
	
	elseif($operaton=='div'){ //Divided Condition
		echo 'The Divided result is   ';
		return $result=$firstNumber / $secondNumber;
	}
	
	elseif($operaton=='mod'){ //Modulas Condition
		echo 'The Modulas result is  ';
		return $result=$firstNumber % $secondNumber;
	}
	
	else{
		echo 'Please Input correct Number..';
	}
}

echo calculator(10,9,'mul');
?>

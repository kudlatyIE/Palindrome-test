<?php

/* 
	@author Nikodem Walicki
	custom exception class
*/

//exception if input is NULL
class InvalidInputException extends Exception{
	
}
//exception throws in other cases (other than NULL)
class NullInputException extends InvalidInputException{
	
}

class NonAlphabeticInputException extends InvalidInputException{
	
}
?>
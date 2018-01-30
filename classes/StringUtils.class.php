<?php

/*
	@author Nikodem Walicki
	Class StringUtils contain methods to perform numer operations on String
	 
*/

include_once('InvalidInputException.class.php');
class StringUtils{

	// Variable declaration.
	var $inputString; 
	
	// Class constructor.
	function __construct($input){
		$this->inputString = $input;
	}

	// return reversed input string
	function reverseString($input){
		return strrev($input);
	}

	
	//return return new string without white spaces and converted to lower cases
	function prepareString($input){
		return strtolower(str_replace(" ","",$input));
	}
	
	//return true if two strings are the same
	function compareMirrorString(){
		if(strcmp($this->prepareString($this->inputString), $this->reverseString($this->prepareString($this->inputString)))===0) return true;
		else return false;
	}
	
	//validate input string: throw NullInputException if input is NULL
	static function validateInput($input){
		if(empty($input)) throw new NullInputException("empty  input");
		if(strlen($input)==1) throw new InvalidInputException("single  char  input");
		if(!ctype_alpha(preg_replace('/\s+/', '', $input))) throw new NonAlphabeticInputException("non  alphabetic  character(s)  input");
	}
}

?>
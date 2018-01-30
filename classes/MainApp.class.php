<?php

/* 
	@author Nikodem Walicki
	Main app class  contains declaration of constructor class and methods handles user input and display test result	
*/

// Import external classes from another files.
include_once('StringUtils.class.php'); 
include_once('Output.class.php');

class MainApp{

	// Variable declaration.
	var $userInput;

	/*
	Class constructor:
	Execute sequence of two functions
	*/
	function __construct(){
		$this->getInput();
		$this->displayResult();
	}

	//Receive and validate user input
	function getInput(){
		// Get query string with identifier: 'inputWord'
		$tempInput = $_GET['inputWord'];
		try{
			StringUtils::validateInput($tempInput);
			$this->userInput = $tempInput;
		}catch(NullInputException $e){
			$this->userInput = $e->getMessage();
		}catch(NonAlphabeticInputException $e){
			$this->userInput = $e->getMessage();
		}catch(InvalidInputException $e){
			$this->userInput = $e->getMessage();
		}
	}


	//perform palindrome test and display result
	function displayResult(){
		$stringUtils = new StringUtils($this->userInput);
		// execute palindrome test
		$out =  new Output($stringUtils->compareMirrorString($this->userInput));
		//display finall result
		echo $out->getOutput($this->userInput);	

	}
}

// execute mainApp constructor
new MainApp;

?>
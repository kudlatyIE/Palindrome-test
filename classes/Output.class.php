<?php

/*
	@author Nikodem Walicki
	Receive user input and boolean value as result of palindrome test.
	Create output.

*/

class Output{

	// Declaring and initializing variables with default values
	var $color = "d90000";// default RED color if input is not palindrome
	var $messageResult = "is NOT palindrom";//default message

	//class constructor: set color and message depends on whether the test result is a success or a failure

	function __construct($success){
		if($success) {
			$this->messageResult = "is palindrom";
			$this->color = "00990b"; // set GREEN color if input is a palindrome
		}
	}

	// Generate output as HTML formated text and back HOME button.
	function getOutput($originalString){
		return "<html>
    				<body>
    					<h1 align=\"center\">Palindrome</h1>
    					<h3 align=\"center\">" . $originalString . "</h3>
						<div align=\"center\" style= color:" .$this->color. ">" .$this->messageResult."</div>
    					</br>
						</br>
						<div align=\"center\">
							<input type=\"button\" value=\"Home\" onClick=\"javascript:history.go(-1)\" />
                        </div>	
    				</body>
    			</html>";
	}


}

?>
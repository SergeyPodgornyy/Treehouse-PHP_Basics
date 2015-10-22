<?php

try{
	//this is where the code we want to test goes
} catch(Exception $e){
	//inspect $e

	$e->getMessage(); //This will get the message that was passed into the exception constructor when the exception was thrown.
	$e->getCode(); //This will return only the integer of the error code that was passed.
	$e->getFile(); //This will get the file in which the error was actually generated.
	$e->getTrace(); //This will return a multi-dimensional array containing the trace methods that lead up to exception. This will contain the method, the class, the file and the argument data.
	$e->getTraceAsString(); //This will be the same as get trace, but in a string format instead of in a multidimensional array.
	$e->__toString(); //It will return string that describes the exception that was thrown.

}

?>
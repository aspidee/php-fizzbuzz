<?php
// PHP program to print Fizz Buzz
class FizzBuzz
{
	public function output()
	{
		for ($n = 1; $n <= 20; $n++) { 
			if ($n % 15 == 0)			
				echo "FizzBuzz\n";  
			 
			else if (($n % 3) == 0)  
				echo "Fizz\n";              
			
			else if (($n % 5) == 0) 
				echo "Buzz\n";              
		
			else          
				echo $n . "\n";              
		}
	}
}
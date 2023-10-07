<?php
 
function printGP($a, $r, $n)
{
	for ($i = 0; $i < $n; $i++)
	{ 
		$curr_term = $a * pow($r, $i);
		echo $curr_term, " ";
	}
}

	// Driver Code
	
	// starting number
	$a = 2; 
	
	// Common ratio
	$r = 3; 
	
	// N th term to be find
	$n = 5; 
	printGP($a, $r, $n);

 
?>

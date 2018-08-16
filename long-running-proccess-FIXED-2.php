<?php


// This script will run for long and will exceed more than 100 seconds.
// To make a fix, you need to send a header or data earlier than your "long-running process".
// sending a header to fix the error is currently impossible in PHP versions at the moment.

declare(ticks=1);

register_tick_function(function(){
	// sending a data each tick
	echo "\n"; // new line, just make sure that this new line will not affect your code.
}, true);

for($f=0;$f<120;$f++){ // we assume that you run 120 php function and will take 1 second to finish for each function
	sleep(1);
}

echo "WOW, you waited me for 120 seconds.";

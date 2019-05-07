<?php
// This script will run for long and will exceed more than 100 seconds.

// To make a fix, you need to send a header or data earlier than your "long-running process".
// sending a header to fix the error is currently impossible in PHP versions at the moment.

// sending a data.
echo str_pad('', 4096, "\n"); // send 4kb of new line to browser, just make sure that this new line will not affect your code.
// if you have output compression, make sure your data will reach >4KB. 


sleep(110);
echo "WOW, you waited me for 110 seconds.";

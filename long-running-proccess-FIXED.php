<?php
// This script will run for long and will exceed more than 100 seconds.

// To make a fix, you need to send a header or data earlier than your "long-running process".
// sending a header to fix the error is currently impossible in PHP versions at the moment.

// sending a data.
$spacer_size = 8; // increment me until it works
echo str_pad('', (1024 * $spacer_size), "\n"); // send 8kb of new line to browser (default), just make sure that this new line will not affect your code.
// if you have output compression, make sure your data will reach >8KB.

if(ob_get_level()) ob_end_clean(); // end output buffering

sleep(110);
echo "WOW, you waited me for 110 seconds.";

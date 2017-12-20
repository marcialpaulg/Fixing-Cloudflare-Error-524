<?php
// This script will run for long and will exceed more than 100 seconds.

// To make a fix, you need to send a header or data earlier than your "long-running process".
// sending a header to fix the error is currently impossible in PHP versions at the moment.

// sending a data.
echo "\n"; // new line, just make sure that this new line will not affect your code.


sleep(110);
echo "WOW, you waited me for 110 seconds.";

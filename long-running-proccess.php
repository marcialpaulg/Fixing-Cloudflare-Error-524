<?php
// This script will run for long and will exceed more than 100 seconds and will trigger Cloudflares 524 error.

sleep(110);
echo "WOW, you waited me for 110 seconds.";

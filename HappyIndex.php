<?php

echo "On a scale of 0 to 10, how happy are you?";


// echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) == '10'){
    echo "Great!\n";
    exit;
}

?>

<?php

echo "On a scale of 0 to 10, how happy are you? ";

$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if (trim($line) == '0'){
    echo "...That's so sad!! Talk to me.\n";
} elseif (('1' <= trim($line)) && (trim($line) <= '3')){
    echo "Terrible. Shall we have a coffee?\n";
} elseif (('4' <= trim($line)) && (trim($line) <= '6')){
    echo "Hmm.. needs improving!\n";
} elseif (('7' <= trim($line)) && (trim($line) <= '9')){
    echo "Pretty good! :)\n";
} elseif (trim($line) == '10'){
    echo "Great!!!\n";
} elseif (trim($line) >= '10'){
    echo "Please read the instructions and try again! :)\n";
exit;
}
?>

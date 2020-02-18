<?php

echo "On a scale of 0 to 10, how happy are you?";


// echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) == '10'){
    echo "Great!\n";
} elseif (trim($line) == '0'){
    echo "...That's so sad!! Talk to me.\n";
// }
// elseif (trim($line)  );

exit;
}
// <?php
// $t = date("H");
//
// if ($t < "10") {
//     echo "Have a good morning!";
// } elseif ($t < "20") {
//     echo "Have a good day!";
// } else {
//     echo "Have a good night!";
// }
//
?>

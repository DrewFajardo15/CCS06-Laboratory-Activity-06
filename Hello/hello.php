<?php
function greet() {


date_default_timezone_set('Asia/Manila');
$message = "Today is: " . date("l jS \of F Y h:i:s A");
return $message;
}


echo greet();


?>

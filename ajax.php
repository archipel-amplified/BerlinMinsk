<?php

$handler_str =  $_SERVER['QUERY_STRING'];

$evalString = "include \"".$handler_str.".handler.php\";";
eval ($evalString);



$return = getResponse($_POST["function"]);

echo $return;

?>
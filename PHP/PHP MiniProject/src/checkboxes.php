<?php

/*
$vehicle = implode(", ",$_GET["vehicle"]);
echo "My favorite form of transport is ".$vehicle."<br>"
*/

foreach($_GET["vehicle"] as $elements)
{
    echo "Mitt fordon är ".$elements."<br>";
}

?>
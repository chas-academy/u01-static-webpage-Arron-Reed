<?php
/*
$data = $_POST["message"];
*/

if(isset($_POST["message"]))
{
    echo "Vi har fått POST-data.<br>";
    echo "<pre>".$_POST["message"]."</pre>";
}
else
{
    echo "Ingen data än.<br>";
}
/*
echo "Vi har mottagit:<br>";
echo "Blogginlägg: ".$data."<br>";
*/
?>
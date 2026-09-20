<?php
$greet='Hello World!';
echo $greet."<br>";

$learn="I am learning PHP";
echo $learn."<br>";

echo $greet[0]."<br>";

$fname="Tom";
$lname="Jerry";
echo $fname." & ".$lname."<br>";

if (strpos($learn,"PHP")) {
    echo "PHP found<br>";
}

echo str_replace("PHP","Java",$learn)."<br>";

echo strlen($greet)."<br>";

echo strtoupper($greet)."<br>";

echo strtolower($greet)."<br>";

?>
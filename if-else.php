<?php

$tng=1;
if ($tng==2) {
    echo ("Its true");
} else {
    echo("Its false");
}


echo "<br /> <br />";
$got=1; $sleep=2; 
if ($got!==$sleep) {
    echo (" true");
} else {
    echo("false");
}


echo "<br /> <br />";
$got=1; $sleep=2; 
if ($got!==$sleep) {
    echo ("true only");
} else {
    echo("false only");
}

echo "<br /> <br />";
$got=1; $sleep=2; $fat=1;
if ($got==$sleep AND $fat==$got) {
    echo (" truth ");
} else {
    echo(" fake");
}

echo "<br /> <br />";
$got=1; $sleep=2; $fat=1;
if ($got==$sleep OR $fat==$got) {
    echo (" truth ");
} else {
    echo(" fake");
}


?>

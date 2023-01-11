<?php
function passwordGen($length, $isAlpha, $isNum, $isSymb)
{
    // password materials
    $alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $num = "1234567890";
    $symb = "$%&()=?@#{}[]*!_-";

    // password data
    $string = "";

    // which material used in data
    if ($isAlpha) {
        $string .= $alpha;
    }
    if ($isNum) {
        $string .= $num;
    }
    if ($isSymb) {
        $string .= $symb;
    }

    // declare $pass as string
    $pass = "";

    // create password
    for ($i = 0; $i < $length; $i++) {

        // pick random int from 0 to {$string length}
        $index = random_int(0, strlen($string));

        // add character of specific index of $string to $pass 
        $pass .= $string[$index];
    }

    return $pass;
};

// get parameter from url
$length = $_GET["length"] ?? false;
$isAlpha = $_GET["alphabet"];
$isNum = $_GET["number"];
$isSymb = $_GET["symbol"];

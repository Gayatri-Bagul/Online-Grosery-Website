<?php
    $str = "This";
    echo $str;
    $lenn = strlen($str);
    echo "<br>";
    echo "The length of this string is ". $lenn . ". Thank You <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank You <br>";
    echo "The reverse string is ". strrev($str) . ". Thank You <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank You <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank You <br>";

    //echo $lenn;
?>
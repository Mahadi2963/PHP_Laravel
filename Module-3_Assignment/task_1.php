<?php

$text = "The quick brown fox jumps over the lazy dog.";

function convertText($text)
{
    $text = strtolower($text);

    $modifiedText = str_replace("brown", "red", $text);

    echo $modifiedText;
}

convertText($text);

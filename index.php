<?php

$text = file_get_contents('jane.txt');

$textArr = explode(' ', $text);

$wordArr = [];

foreach ($textArr as $word) {
    if (key_exists($word, $wordArr)) {
        $wordArr[$word]++;
    } else {
        if ($word != ''){
        $wordArr[$word] = 1;
        }
    }
}

uksort($wordArr, 'mysort');

echo 'Total number of words:' . array_sum($wordArr) . '<br>';
echo 'Total number of distinct words:' . count($wordArr) . '<br>';
reset($wordArr);
echo 'Longest word:' . strlen(key($wordArr)) . ' characters.<br><br>';



foreach ($wordArr as $word => $count) {
    echo $word . ' -> ' . $count . '<br>';
}

function mysort($a, $b)
{
    return strlen($a) < strlen($b);
}
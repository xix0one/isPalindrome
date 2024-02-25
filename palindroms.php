<?php
function isPalindrome($text)
{
    $text = strtolower($text);
    $num = iconv_strlen($text);
    $sum = 0;
    for ($i = 0, $j = -1; $i < $num; $i++, $j--) {
    	if ($text[$i] === $text[$j]) {
    		$sum++;
    	}
    }
    if ($sum === $num) return true;
    else return false;
}

function isNotPalindrome($text)
{
    return !isPalindrome($text);
}
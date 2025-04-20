<?php

namespace MachineCode;

require_once __DIR__ . '/CharMap.php';

function convertToBinary($input)
{
    $binaryString = '';
    $chars = str_split($input);

    foreach ($chars as $char) {
        $binaryString .= str_pad(decbin(ord($char)), 8, '0' , STR_PAD_LEFT);
    }

    return trim($binaryString);
}
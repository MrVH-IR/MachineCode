<?php

namespace MachineCode;

class BinaryCompiler
{
    protected string $input;

    protected array $map;

    public function __construct(string $input)
    {
        $this->input = $input;
        $this->map = require_once __DIR__ . '/Chars.php';
    }

    public function compile(): string
    {
        $binary = '';
        $chars = str_split($this->input);

        foreach ($chars as $char) {
            $binaryValue = $this->map[$char] ?? '?????';
            $binary .= $binaryValue . ' ';
        }

        return trim($binary);
    }
}
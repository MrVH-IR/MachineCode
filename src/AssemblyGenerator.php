<?php

namespace MachineCode;

class AssemblyGenerator
{
    protected string $binary;
    protected string $input;

    public function __construct(string $binary , string $input)
    {
        $this->binary = $binary;
        $this->input = $input;
    }

    public function generate(string $outputDir = __DIR__ . '/../output/'): bool
    {
        $fileName = $outputDir . 'output_' . time() . '.asm';

        $asm = "; Input Text: " . $this->input . "\n";
        $asm .= "section .data\n";
        $asm .= "    msg db ";

        $bytes = explode(' ', $this->binary);
        foreach ($bytes as $byte) {
            $decimal = bindec($byte);
            $asm .= $decimal . ', ';
        }

        $asm = rtrim($asm, ', ') . "\n";
        $asm .= "    len equ \$ - msg\n";
        $asm .= "\nsection .text\n";
        $asm .= "    global _start\n";
        $asm .= "_start:\n";
        $asm .= "    mov edx, len\n";
        $asm .= "    mov ecx, msg\n";
        $asm .= "    mov ebx, 1\n";
        $asm .= "    mov eax, 4\n";
        $asm .= "    int 0x80\n";
        $asm .= "    mov eax, 1\n";
        $asm .= "    int 0x80\n";
        
        return file_put_contents($fileName, $asm) !== false;
    }
}
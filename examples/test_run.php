<?php

namespace examples;
require_once __DIR__ . '/../src/BinaryCompiler.php';
require_once __DIR__ . '/../src/AssemblyGenerator.php';

use MachineCode\BinaryCompiler;
use MachineCode\AssemblyGenerator;

require_once __DIR__ . '/../src/BinaryCompiler.php';
$compiler = new BinaryCompiler('Hello@123!');
$binary = $compiler->compile();
$asm = new AssemblyGenerator($binary, 'Hello@123!');
$asm->generate();
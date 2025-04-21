MachineCode: Binary to Assembly Converter
📖 Overview

MachineCode is a project designed to convert text strings into binary and then into assembly code (NASM). The main goal of this project is to take a given input string, convert each character to binary, and then generate an assembly file that can be used with assembly programs like NASM.

The project is implemented in PHP, using standard PHP functions for binary conversion and assembly code generation.
🚀 Features

    Convert text to binary using a character map.

    Generate an assembly file from the binary code.

    Create different files for each request.

    Include a comment with the original text at the beginning of the assembly file.

    Supports various input types (uppercase letters, lowercase letters, numbers, and special symbols).

🔧 Requirements

To run the project, you need the following:

    PHP 7.4+ (or higher)

    A Linux or similar development environment (for running assembly code with NASM)

Installation

    Clone the project from GitHub:

    
    git clone https://github.com/MrVH-IR/MachineCode.git
    cd MachineCode
    
Then, run the project in your PHP environment.

To convert a text to binary and generate the assembly code, simply call the compile and generate methods in the classes.

Example Usage


    use MachineCode\BinaryCompiler;
    use MachineCode\AssemblyGenerator;
    
    $compiler = new BinaryCompiler('Hello@123!');
    $binary = $compiler->compile();
    
    $asm = new AssemblyGenerator($binary, 'Hello@123!');
    $asm->generate();


Generate a New Assembly File for Each Input

Every time the code is executed, a new file will be created with a unique name based on the timestamp, containing the assembly code for the input string.
🎯 Usage

    Call the compile method from the BinaryCompiler class to convert your input text into binary.

    Then, use the AssemblyGenerator class to generate the assembly code from the binary.

    Example: Binary to Assembly Conversion
    `
    $binaryString = "01001000 01100101 01101100 01101100 01101111";
    $asm = new AssemblyGenerator($binaryString, 'Hello');
    $asm->generate();
    `
Contribution

You can contribute to this project! If you have any suggestions for improvements or find any bugs, please open a new Issue or submit a Pull Request.
📝 License

This project is licensed under the MIT License. Please refer to the LICENSE file for more information.

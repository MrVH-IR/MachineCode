; Input Text: Hello@123!
section .data
    msg db 72, 101, 108, 108, 111, 64, 49, 50, 51, 33
    len equ $ - msg

section .text
    global _start
_start:
    mov edx, len
    mov ecx, msg
    mov ebx, 1
    mov eax, 4
    int 0x80
    mov eax, 1
    int 0x80

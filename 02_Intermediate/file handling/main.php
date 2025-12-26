<?php
/*
    PHP File Handling
    File handling is an important part of any web application. You often need to open and process a file for different tasks.
    PHP has several built-in functions for creating, reading, uploading, and editing files.

    The core functions for file handling is:

    readfile() - reads a file and writes it to the output buffer
    fopen() - opens a file (gives you more options than the readfile() function)
    fread() - reads from a file
    fgets() - reads a single line from a file
    fgetc() - reads a single character from a file
    feof() - checks if the "end-of-file" (EOF) has been reached
    fwrite() - writes to a file
    fclose() - closes an open file
    unlink() - deletes a file
*/

echo readfile("data.txt");
?>
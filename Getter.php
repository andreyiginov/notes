<?php

function getFiles() {
    $files = [
        'index.php',
    ];
    $dir = new DirectoryIterator(__DIR__);
    foreach ($dir as $file) {
        if ($file->isDir() && !$file->isDot()) {
            $files[] = $file->getFilename();

        }
    }
}
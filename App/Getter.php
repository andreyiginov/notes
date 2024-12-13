<?php

class Getter {
    public function __construct()
    {
        $this->getFiles(); // вызываем метод
    }

    private function getFiles() { // метод
        $files = [ // массив
            'index.php',
        ];
        $dir = new DirectoryIterator(__DIR__); // создание директории и итератора
        foreach ($dir as $file) { // цикл
            if ($file->isDir() && !$file->isDot()) { // если это директория
                $files[] = $file->getFilename(); // добавляем в массив

            }
        }
    }

}
<?php

class FileManager {
    private $dir;
    public function __construct($dir) {
        $this->dir = $dir;
    }
}

/**
 * Сохраняет текст заметки в файл с расширением .content
 *
 * @param string $note Текст заметки для сохранения
 * @return string|false Имя файла, в который была сохранена заметка, или false в случае ошибки
 */
function saveNoteToFile($note) {
    // Генерируем уникальное имя файла с текущей датой и временем
    $filename = 'note_' . date('Y-m-d_H-i-s') . '.content';

    // Пытаемся записать текст заметки в файл
    if (file_put_contents($filename, $note) !== false) {
        // Если запись успешна, возвращаем имя файла
        return $filename;
    } else {
        // В случае ошибки возвращаем false
        return false;
    }
}
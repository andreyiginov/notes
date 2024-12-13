<?php

// main.php

require_once 'Creater.php'; // Подключаем файл с функцией getNoteFromUser
require_once 'Getter.php';// Подключаем файл с функцией getNoteFromFile
require_once 'FileManager.php'; // подключаем файл с функцией saveNoteToFile


$arg = isset($argv[1]) ? $argv[1] : null; // получаем первый аргумент из командной строки или null

if ($arg === '--new') { // если аргумент --new, то вызываем функцию создания новой заметки

// Вызываем функцию для получения заметки от пользователя
$userNote = getNoteFromUser();

// Сохраняем заметку в файл и получаем результат операции
$savedFilename = saveNoteToFile($userNote);

// Проверяем результат сохранения
if ($savedFilename) {
// Если сохранение успешно, выводим подтверждающее сообщение
echo "Заметка успешно сохранена в файл: $savedFilename\n";
} else {
// Если произошла ошибка, выводим сообщение об ошибке
    echo "Не удалось сохранить заметку.\n";
}
} elseif ($arg === '--list') {
    echo "Список заметок:\n"; // выводим список заметок
    $files = FileManager::getFiles(); // получаем список файлов
    foreach ($files as $file) { // перебираем файлы
        echo $file . "\n"; // выводим имя файла
    }
} else {
    echo "Список доступных флагов:\n";
    echo "--new — создание новой заметки.\n";
    echo "--list — просмотр всех заметок.\n";
}




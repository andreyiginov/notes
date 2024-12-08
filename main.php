<?php
// main.php

// Подключаем файл с функцией getNoteFromUser
require_once 'Creater.php';

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

} elseif ($arg === '--list') { // если аргумент --list, то вызываем функцию просмотра всех заметок
    // Здесь должен быть код для вывода списка заметок
} else { 
    echo "Список доступных флагов:\n
--new — создание новой заметки.\n
--list — просмотр всех заметок.\n";
}


// git remote set-url origin ssh://git@gitverse.ru:2222/iginov/notes.git
// ssh://git@gitverse.ru:2222/iginov/notes.git
//sdasdasdasd

?>
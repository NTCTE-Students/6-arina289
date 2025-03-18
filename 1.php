<?php
$filename = 'example.txt'; // Путь к файлу

// Проверяем, существует ли файл
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo nl2br($content); // Выводим содержимое файла
} else {
    echo "Ошибка: файл не существует.";
}
?>

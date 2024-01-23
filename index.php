<?php
// 1 задание //

// fgets — Читает строку из файла;
// fopen — Открывает файл или URL;

$file = fopen(__DIR__ . '/code.txt', 'r');
for ($i = 0; $i <= 4; $i++) {
    echo fgets($file);
    echo '<br>';
}
?>

<?php
// 2 задание //
 
// scandir — Получает список файлов и каталогов, расположенных по указанному пути;
// foreach - Конструкция в которой можно работать с многомерным массивом, в php называется циклом;

$files = scandir(__DIR__ . '/');
foreach ($files as $file) {
echo $file . '<br>';
}

$files = scandir(__DIR__ . '/');
foreach ($files as $dirr) {
    if (is_dir($dirr)) {
        echo $dirr . '<br>';
    }
}
?>
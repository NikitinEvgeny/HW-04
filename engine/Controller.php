<?php

$errors = [];

if (!empty($_FILES)) {

    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {

        $fileName = $_FILES['files']['name'][$i];

        if ($_FILES['files']['size'][$i] > UPLOAD_MAX_SIZE) {
            $errors[] ='Недопостимый размер файла ' . $fileName;
            continue;
        }

        if (!in_array($_FILES['files']['type'][$i], ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $fileName;
            continue;
        }

        $filePath = UPLOAD_DIR . '/' . basename($fileName);
        //Пытаемся загрузить файл, в случае ошибки переход к следующей итерации
        if (!move_uploaded_file($_FILES['files']['tmp_name'][$i], $filePath)) {
            $errors[] = 'Ошибка загрузки файла ' . $fileName;
            continue;
        }
    }

}

$files1 = scandir(SCAN_DIR);
 array_shift($files1 );




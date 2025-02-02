<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);
$folder = __DIR__ . "/uploads";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
}

var_dump([
    "fileMaxSize" => ini_get("upload_max_filesize"),
    "postMaxSize" => ini_get("post_max_size"),
]);

var_dump([
    filetype(__DIR__ . "/index.php"),
    mime_content_type(__DIR__ . "/index.php"),
]);


$postExist = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);

if ($_FILES && !empty($_FILES['file']['name'])) {
    $fileUpload = $_FILES["file"];
    var_dump($fileUpload);

    $allowedTypes = ["image/jpg", "image/jpeg", "image/png", "application/pdf"];
    $newFileName = time() . mb_strstr($fileUpload['name'], ".");

    if (!in_array($fileUpload["type"], $allowedTypes)) {
        echo "<p class='trigger error'>Tipo de arquivo não permitido!</p>";
        exit;
    }

    if (!move_uploaded_file($fileUpload["tmp_name"], __DIR__ . "/uploads/{$newFileName}")) {
        echo "<p class='trigger error'>Erro inesperado!</p>";
        exit;
    }

    echo "<p class='trigger accept'>Arquivo enviado com sucesso!</p>";

    var_dump($newFileName);
} elseif ($postExist) {
    echo "<p class='trigger error'>Whoops, parece que o arquivo é muito grande!</p>";
} elseif ($_FILES) {
    echo "<p class='trigger error'>Selecione o arquivo antes de enviar!</p>";
}

require __DIR__ . "/form.php";
var_dump(scandir(__DIR__ . "/uploads"));
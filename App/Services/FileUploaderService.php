<?php

namespace App\Services;

use App\Services\Contracts\IUploader;

class FileUploaderService implements IUploader
{
    public static function upload(array $file, string $uploadDir = IMG_DIR): string|bool
    {
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, '0777', true);
        }

        $uploadFile = $uploadDir . '/' . basename($file['name']);
        move_uploaded_file($file['tmp_name'], $uploadFile);

        return str_replace(IMG_DIR, '', $uploadFile);
    }

    public static function remove(string $file)
    {

    }
}
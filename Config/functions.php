<?php

function redirect(string $path = '/')
{
    header('Location: ' . ROOT_URL . '/' . $path);
    exit;
}

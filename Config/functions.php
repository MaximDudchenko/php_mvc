<?php

function redirect(string $path = '')
{
    header('Location: ' . ROOT_URL . '/' . $path);
    exit;
}

function url(string $link = '')
{
    return ROOT_URL . '/' . $link;
}

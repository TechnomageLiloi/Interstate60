<?php
//define('ROOT_DIR', __DIR__);
include_once __DIR__ . '/vendor/autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);

$config = array_merge([
    'title' => 'Interstate 60',
    'start' => 'Requests.layout();',
    'scripts' => [
    ],
    'prefix' => 'i60_'
], $private);

$app = new \Liloi\I60\Application($config);

echo $app->compile();
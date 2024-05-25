<?php

namespace Liloi\Rune\API\Wiki\Edit;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Wiki\Manager as WikiManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $URL = $_SERVER['REQUEST_URI'];
        $keyAtom = WikiManager::URLToKey($URL);
        $entity = WikiManager::load($keyAtom);

        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'entity' => $entity
        ]));
        return $response;
    }
}
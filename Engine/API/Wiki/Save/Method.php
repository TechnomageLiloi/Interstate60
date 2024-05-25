<?php

namespace Liloi\Rune\API\Wiki\Save;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Wiki\Manager as WikiManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $keyAtom = self::getParameter('key_wiki');
        $entity = WikiManager::load($keyAtom);

        $entity->setTitle(self::getParameter('title'));
        $entity->setArticle(self::getParameter('article'));

        WikiManager::save($entity);

        return new Response();
    }
}
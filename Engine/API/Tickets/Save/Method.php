<?php

namespace Liloi\I60\API\Tickets\Save;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domain\Tickets\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_ticket']);
        $entity->setStart($_POST['parameters']['start']);
        $entity->setTitle($_POST['parameters']['title']);
        $entity->setMark($_POST['parameters']['mark']);
        $entity->setStatus($_POST['parameters']['status']);
        $entity->setData($_POST['parameters']['data']);
        $entity->save();

        return [];
    }
}
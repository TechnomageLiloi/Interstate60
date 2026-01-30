<?php

namespace Liloi\I60\API\Tickets\Save;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domain\Tickets\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_ticket']);
        $entity->setComment($_POST['parameters']['comment']);
        $entity->save();

        return [];
    }
}
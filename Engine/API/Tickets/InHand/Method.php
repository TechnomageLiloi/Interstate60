<?php

namespace Liloi\I60\API\Tickets\InHand;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domain\Tickets\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_ticket']);
        $entity->setStart(date('Y-m-d H:i:s'));
        $entity->save();

        return [];
    }
}
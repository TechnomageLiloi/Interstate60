<?php

namespace Liloi\I60\API\Tickets\Show;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domain\Tickets\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_ticket']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}
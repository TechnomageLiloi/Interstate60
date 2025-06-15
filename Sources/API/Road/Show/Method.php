<?php

namespace Liloi\I60\API\Road\Show;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domains\Road\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::loadCurrent();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}
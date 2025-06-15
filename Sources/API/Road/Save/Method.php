<?php

namespace Liloi\I60\API\Road\Save;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domains\Road\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_day']);

        $entity->setData($_POST['parameters']['data']);
        $entity->setProgram($_POST['parameters']['program']);

        $entity->save();

        return [];
    }
}
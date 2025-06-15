<?php

namespace Liloi\I60\API\Road\Create;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domains\Road\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}
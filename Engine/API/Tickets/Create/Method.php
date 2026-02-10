<?php

namespace Liloi\I60\API\Tickets\Create;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domain\Tickets\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}
<?php

namespace Liloi\I60\API\Road\Edit;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domains\Road\Manager as DiaryManager;

/**
 * Rune API: Interstate60.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_day']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}
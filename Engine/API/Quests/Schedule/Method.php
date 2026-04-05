<?php

namespace Liloi\I60\API\Quests\Schedule;

use Liloi\I60\API\Method as SuperMethod;
use Liloi\I60\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quests = DiaryManager::loadCollection();
        $schedule = DiaryManager::loadSchedule();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'schedule' => $schedule,
                'quests' => $quests
            ])
        ];
    }
}
<?php

namespace Liloi\I60\Domain\Quests;

use Liloi\Tools\Collection as AbstractCollection;

/**
 * @todo: add tests
 * @todo: add docs
 * @package Engine\Domain\Exercise
 */
class Collection extends AbstractCollection
{
    public function toSchedule(): array
    {
        $hours = [];

        for($i=0;$i<24;$i++)
        {
            $hours[$i] = [];
        }

        /** @var Entity $entity */
        foreach ($this as $entity)
        {
            $hours[$entity->getHour()][] = $entity;
        }

        return $hours;
    }
}
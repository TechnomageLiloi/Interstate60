<?php

namespace Liloi\I60\Domain\Tickets;

use Liloi\I60\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'tickets';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            "select * from %s where start between '%s 00:00:00' and '%s 23:59:59' order by key_ticket desc;",
            $name, date('Y-m-d'), date('Y-m-d')
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[(int)$row['key_ticket']] = Entity::create($row);
        }

        return $collection;
    }

    public static function loadSchedule(): array
    {
        $schedule = [];

        for($i = 0; $i < 24; $i++)
        {
            $schedule[$i] = [];
        }

        $collection = self::loadCollection();

        /** @var Entity $entity */
        foreach ($collection as $entity)
        {
            $hour = date('H', strtotime($entity->getKeyTicket()));
            $schedule[$hour][] = $entity;
        }

        return $schedule;
    }

    public static function load(string $key_ticket): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_ticket="%s";',
            $name, $key_ticket
        ));

        if(!$row)
        {
            throw new \Exception('Page not found.');
        }

        return Entity::create($row);
    }

    /**
     * Save day.
     *
     * @param Entity $entity
     */
    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        self::update($name, $data, sprintf('key_ticket="%s"', $data['key_ticket']));
    }

    /**
     * Create new day.
     */
    public static function create(): Entity
    {
        $data = [
            'start' => date('Y-m-d H:i:s'),
            'title' => 'Enter the title',
            'status' => Statuses::TODO,
            'data' => '{}'
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }
}
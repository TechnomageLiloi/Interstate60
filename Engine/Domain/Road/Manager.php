<?php

namespace Liloi\I60\Domain\Road;

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
        return self::getTablePrefix() . 'road';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_step desc limit 17;',
            $name
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    /**
     * Load day by key.
     *
     * @param string $keyStep
     * @return Entity
     */
    public static function load(string $keyStep): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_step="%s";',
            $name, $keyStep
        ));

        if(!$row)
        {
            // @todo: throw exception
        }

        return Entity::create($row);
    }

    /**
     * Load current day.
     *
     * @return Entity
     */
    public static function loadCurrent(): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s order by key_step desc limit 1;',
            $name
        ));

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
        unset($data['key_day']);

        self::update($name, $data, sprintf('key_day="%s"', $entity->getKey()));
    }

    /**
     * Create new day.
     */
    public static function create(): Entity
    {
        $data = [
            'key_step' => date('Y-m-d H:i:s'),
            'summary' => '-',
            'type' => Types::CODEX,
            'data' => '{}'
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }
}
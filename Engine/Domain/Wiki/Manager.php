<?php

namespace Liloi\Rune\Domain\Wiki;

use Liloi\Rune\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'wiki';
    }

    public static function create(string $keyWiki): Entity
    {
        $name = self::getTableName();

        $row = [
            'key_wiki' => $keyWiki,
            'title' => 'Enter the title',
            'article' => 'Enter the article'
        ];

        self::getAdapter()->insert($name, $row);

        return Entity::create($row);
    }

    public static function load(string $keyWiki): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_wiki="%s";',
            $name, $keyWiki
        ));

        if(!$row)
        {
            return self::create($keyWiki);
        }

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();
        unset($data['key_wiki']);

        self::update($name, $data, sprintf('key_wiki="%s"', $entity->getKey()));
    }

    public static function URLToKey(string $URL): string
    {
        $lower = trim($URL, '/');

        if(in_array($lower, ['', 'rune']))
        {
            return 'rune';
        }

        return 'rune:' . str_replace('/', ':', $lower);
    }

    public static function KeyToURL(string $key): string
    {
        if($key === 'rune')
        {
            return '/';
        }

        $lower = str_replace('rune:', '', $key);
        return '/' . str_replace(':', '/', $lower);
    }
}
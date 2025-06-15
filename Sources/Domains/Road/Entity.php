<?php

namespace Liloi\I60\Domains\Road;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getTs()
 * @method void setTs(string $value)
 *
 * @method string getProgram()
 * @method void setProgram(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_day');
    }

    public function getID(): string
    {
        return sprintf("#%03x", $this->getKey());
    }

    public function parse(): string
    {
        return Parser::parseString($this->getProgram());
    }

    public function save(): void
    {
        Manager::save($this);
    }

    public function getStep(): string
    {
        return $this->getKey();
    }
}
<?php

namespace Liloi\I60\Domain\Tickets;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getComment()
 * @method void setComment(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKeyTicket(): string
    {
        return $this->getField('key_ticket');
    }

    public function save(): void
    {
        Manager::save($this);
    }
}
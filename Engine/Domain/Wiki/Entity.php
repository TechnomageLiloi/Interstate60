<?php

namespace Liloi\Rune\Domain\Wiki;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getArticle()
 * @method void setArticle(string $value)
 */
class Entity extends AbstractEntity
{
    /**
     * Gets quest key.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->getField('key_wiki');
    }

    /**
     * Stylo parse of article.
     *
     * @return string
     */
    public function parseArticle(): string
    {
        return Parser::parseString($this->getArticle());
    }
}
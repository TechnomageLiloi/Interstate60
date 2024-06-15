<?php

namespace Liloi\I60\API;

use Liloi\API\Manager;
use Liloi\API\Method;
use Liloi\I60\API\Method as RuneMethod;

/**
 * @inheritDoc
 */
class Tree
{
    private static ?self $instance = null;

    private Manager $manager;

    private function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @obsolete It is centralized, which is incorrect.
     * @todo Add general API Pool.
     * @return static
     */
    public static function getInstance(): self
    {
        if(self::$instance === null)
        {
            $manager = new Manager();
            
            $manager->add(new Method('I60.Road.Search', '\Liloi\I60\API\Road\Search\Method::execute'));
            $manager->add(new Method('I60.Road.Create', '\Liloi\I60\API\Road\Create\Method::execute'));
            $manager->add(new Method('I60.Road.Show', '\Liloi\I60\API\Road\Show\Method::execute'));
            $manager->add(new Method('I60.Road.Edit', '\Liloi\I60\API\Road\Edit\Method::execute'));
            $manager->add(new Method('I60.Road.Save', '\Liloi\I60\API\Road\Save\Method::execute'));

            self::$instance = new self($manager);
        }

        return self::$instance;
    }

    public function execute(): string
    {
        // @todo: optimize

        // @todo: add dynamic API search (by namespace).
        $response = $this->manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->asJson();
    }

    /**
     * Get API manager.
     *
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }
}
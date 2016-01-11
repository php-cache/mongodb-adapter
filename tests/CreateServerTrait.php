<?php

namespace Cache\Adapter\MongoDB\Tests;

use Cache\Adapter\MongoDB\MongoDBCachePool;
use MongoDB\Driver\Manager;

trait CreateServerTrait
{
    private $collection = null;

    /**
     * @return mixed
     */
    public function getCollection()
    {
        if ($this->collection === null) {
            $manager = new Manager("mongodb://".getenv('MONGODB_HOST'));

            // In your own code, only do this *once* to initialize your cache
            $this->collection = MongoDBCachePool::createCollection($manager, getenv('MONGODB_COLLECTION'));
        }

        return $this->collection;
    }
}
<?php

/*
 * This file is part of php-cache\mongodb-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\MongoDB;

use Cache\Adapter\Common\AbstractCachePool;
use Psr\Cache\CacheItemInterface;
use MongoDB\Client;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class MongoDBCachePool extends AbstractCachePool
{
    /**
     * @var Client
     */
    private $client;

    /**
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function fetchObjectFromCache($key)
    {
        return false;
    }

    protected function clearAllObjectsFromCache()
    {
        return true;
    }

    protected function clearOneObjectFromCache($key)
    {
        return true;
    }

    protected function storeItemInCache($key, CacheItemInterface $item, $ttl)
    {
        return true;
    }
}

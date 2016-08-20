<?php

use \Psr\Cache\CacheItemPoolInterface;

/**
 * Apishka cacher pool
 */

class Apishka_Cacher_Pool implements CacheItemPoolInterface
{
    /**
     * Returns a Cache Item representing the specified key.
     *
     * @param string $key
     *
     * @return CacheItemInterface
     */

    public function getItem($key)
    {
    }

    /**
     * Returns a traversable set of cache items.
     *
     * @param string[] $keys
     *
     * @return array|\Traversable
     */

    public function getItems(array $keys = array())
    {
    }

    /**
     * Confirms if the cache contains specified cache item.
     *
     * @param string $key
     *
     * @return bool
     */

    public function hasItem($key)
    {
    }

    /**
     * Deletes all items in the pool.
     *
     * @return bool
     */

    public function clear()
    {
    }

    /**
     * Removes the item from the pool.
     *
     * @param string $key
     *
     * @return bool
     */

    public function deleteItem($key)
    {
    }

    /**
     * Removes multiple items from the pool.
     *
     * @param string[] $keys
     *
     * @return bool
     */

    public function deleteItems(array $keys)
    {
    }

    /**
     * Persists a cache item immediately.
     *
     * @param CacheItemInterface $item
     *
     * @return bool
     */

    public function save(CacheItemInterface $item)
    {
    }

    /**
     * Sets a cache item to be persisted later.
     *
     * @param CacheItemInterface $item
     *
     * @return bool
     */

    public function saveDeferred(CacheItemInterface $item)
    {
    }

    /**
     * Persists any deferred cache items.
     *
     * @return bool
     */

    public function commit()
    {
    }
}

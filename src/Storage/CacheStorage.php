<?php

declare(strict_types=1);

namespace App\Storage;

use Psr\Cache\CacheItemPoolInterface;

class CacheStorage implements Storage
{
    private $storage;
    private $cache;

    public function __construct(Storage $storage, CacheItemPoolInterface $cache)
    {
        $this->storage = $storage;
        $this->cache = $cache;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $id): string
    {
        // Check cache, call decorated storage if needed, update cache, return value.
        $this->storage->get($id);

        return 'CACHE';
    }
}

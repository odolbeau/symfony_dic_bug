<?php

declare(strict_types=1);

namespace App\Storage;

class DBStorage implements Storage
{
    public function get(string $id): string
    {
        return 'DB';
    }
}

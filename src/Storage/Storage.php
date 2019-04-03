<?php

declare(strict_types=1);

namespace App\Storage;

interface Storage
{
    public function get(string $id): string;
}

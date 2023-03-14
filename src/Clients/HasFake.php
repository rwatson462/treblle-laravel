<?php

declare(strict_types=1);

namespace Treblle\Clients;

use Closure;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\Facades\Http;

trait HasFake
{
    public static function fake(array|Closure|null $callback = null): Factory
    {
        return Http::fake(
            callback: $callback,
        );
    }
}

<?php

declare(strict_types = 1);

namespace Core\Http\Enums;

enum HttpMethod: string
{
    case Get    = 'GET';
    case Post   = 'POST';
    case Put    = 'PUT';
    case Patch  = 'PATCH';
    case Delete = 'DELETE';
}

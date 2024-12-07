<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\GitTag;

final class Object_ extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GitTag\Object_ $error)
    {
    }
}

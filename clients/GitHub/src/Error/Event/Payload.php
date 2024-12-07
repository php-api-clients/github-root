<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Event;

final class Payload extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Event\Payload $error)
    {
    }
}

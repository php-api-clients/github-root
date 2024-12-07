<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\HookDelivery\Response;

final class Headers extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookStatus;

final class Branches extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookStatus\Branches $error)
    {
    }
}

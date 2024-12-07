<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookReleasePrereleased;

final class Release extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookReleasePrereleased\Release $error)
    {
    }
}

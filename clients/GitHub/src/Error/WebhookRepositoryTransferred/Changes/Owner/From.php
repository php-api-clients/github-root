<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookRepositoryTransferred\Changes\Owner;

final class From extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookRepositoryTransferred\Changes\Owner\From;

final class Organization extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From\Organization $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class WebhookRepositoryTransferred extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred $error)
    {
    }
}

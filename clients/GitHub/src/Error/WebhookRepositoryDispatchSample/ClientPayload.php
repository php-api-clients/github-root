<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookRepositoryDispatchSample;

final class ClientPayload extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryDispatchSample\ClientPayload $error)
    {
    }
}

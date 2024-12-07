<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class WebhookRepositoryImport extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryImport $error)
    {
    }
}

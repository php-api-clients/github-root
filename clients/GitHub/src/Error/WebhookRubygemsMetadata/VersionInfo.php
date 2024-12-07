<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRubygemsMetadata;

use Error;

final class VersionInfo extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRubygemsMetadata\VersionInfo $error)
    {
    }
}

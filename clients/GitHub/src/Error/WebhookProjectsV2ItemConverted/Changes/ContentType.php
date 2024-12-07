<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectsV2ItemConverted\Changes;

use Error;

final class ContentType extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes\ContentType $error)
    {
    }
}

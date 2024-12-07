<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectsV2ItemEdited\Changes\Zero;

use Error;

final class FieldValue extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes\Zero\FieldValue $error)
    {
    }
}

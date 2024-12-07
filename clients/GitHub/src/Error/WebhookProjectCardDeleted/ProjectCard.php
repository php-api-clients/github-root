<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectCardDeleted;

use Error;

final class ProjectCard extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectCardDeleted\ProjectCard $error)
    {
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryWebhooks\TemplateRepository;

use Error;

final class Owner extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner $error)
    {
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryWebhooks;

use Error;

final class TemplateRepository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository $error)
    {
    }
}

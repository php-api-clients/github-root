<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization\Request;

use Error;

final class ApplicationJson extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization\Request\ApplicationJson $error)
    {
    }
}

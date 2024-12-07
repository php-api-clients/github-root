<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Codespaces\SetSelectedReposForOrgSecret\Request;

final class ApplicationJson extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Codespaces\SetSelectedReposForOrgSecret\Request\ApplicationJson $error)
    {
    }
}

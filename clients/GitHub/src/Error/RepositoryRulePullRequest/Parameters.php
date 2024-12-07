<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\RepositoryRulePullRequest;

final class Parameters extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRulePullRequest\Parameters $error)
    {
    }
}

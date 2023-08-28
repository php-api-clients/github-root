<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GitignoreTemplate;

final class Gitignore
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<string>|array{code:int} */
    public function getAllTemplates(): iterable
    {
        return $this->operators->gitignore👷GetAllTemplates()->call();
    }

    /** @return Schema\GitignoreTemplate|array{code:int} */
    public function getTemplate(string $name): GitignoreTemplate|array
    {
        return $this->operators->gitignore👷GetTemplate()->call($name);
    }
}

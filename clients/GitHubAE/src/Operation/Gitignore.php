<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\GitignoreTemplate;

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

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GitignoreTemplate;

final class Gitignore
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<string>|array{code:int} */
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

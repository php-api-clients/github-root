<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\GitignoreTemplate;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Gitignore
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,string>|WithoutBody */
    public function getAllTemplates(): iterable|WithoutBody
    {
        return $this->operators->gitignore👷GetAllTemplates()->call();
    }

    public function getTemplate(string $name): GitignoreTemplate|WithoutBody
    {
        return $this->operators->gitignore👷GetTemplate()->call($name);
    }
}

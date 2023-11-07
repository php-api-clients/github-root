<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GitignoreTemplate;
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

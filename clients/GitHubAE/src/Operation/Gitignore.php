<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\GitignoreTemplate;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Gitignore
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<string>|WithoutBody */
    public function getAllTemplates(): iterable|WithoutBody
    {
        return $this->operators->gitignore👷GetAllTemplates()->call();
    }

    /** @return */
    public function getTemplate(string $name): GitignoreTemplate|WithoutBody
    {
        return $this->operators->gitignore👷GetTemplate()->call($name);
    }
}

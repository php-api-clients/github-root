<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CodeOfConduct;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodesOfConduct
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\CodeOfConduct>|WithoutBody */
    public function getAllCodesOfConduct(): iterable|WithoutBody
    {
        return $this->operators->codesOfConduct👷GetAllCodesOfConduct()->call();
    }

    /** @return */
    public function getConductCode(string $key): CodeOfConduct|WithoutBody
    {
        return $this->operators->codesOfConduct👷GetConductCode()->call($key);
    }
}

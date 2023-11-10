<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\CodeOfConduct;
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

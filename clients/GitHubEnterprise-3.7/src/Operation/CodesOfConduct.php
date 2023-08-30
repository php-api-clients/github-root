<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CodeOfConduct;

final class CodesOfConduct
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\CodeOfConduct>|array{code:int} */
    public function getAllCodesOfConduct(): iterable
    {
        return $this->operators->codesOfConduct👷GetAllCodesOfConduct()->call();
    }

    /** @return Schema\CodeOfConduct|array{code:int} */
    public function getConductCode(string $key): CodeOfConduct|array
    {
        return $this->operators->codesOfConduct👷GetConductCode()->call($key);
    }
}

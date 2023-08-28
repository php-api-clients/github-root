<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\CodeOfConduct;

final class CodesOfConduct
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\CodeOfConduct>|array{code:int} */
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

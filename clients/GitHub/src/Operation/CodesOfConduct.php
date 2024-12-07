<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodesOfConduct
{
    public function __construct(public Operators $operators)
    {
    }

    /** @return Observable<CodeOfConduct>|WithoutBody */
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

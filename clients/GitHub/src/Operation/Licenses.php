<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Client\GitHub\Schema\LicenseContent;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Licenses
{
    public function __construct(public Operators $operators)
    {
    }

    /** @return Observable<LicenseSimple>|WithoutBody */
    public function getAllCommonlyUsed(bool $featured, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->licenses👷GetAllCommonlyUsed()->call($featured, $perPage, $page);
    }

    /** @return */
    public function get(string $license): License|WithoutBody
    {
        return $this->operators->licenses👷Get()->call($license);
    }

    /** @return */
    public function getForRepo(string $owner, string $repo, string $ref): LicenseContent
    {
        return $this->operators->licenses👷GetForRepo()->call($owner, $repo, $ref);
    }
}

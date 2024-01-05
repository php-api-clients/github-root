<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\License;
use ApiClients\Client\GitHubAE\Schema\LicenseContent;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Licenses
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\LicenseSimple>|WithoutBody */
    public function getAllCommonlyUsed(bool $featured, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->licenses👷GetAllCommonlyUsed()->call($featured, $perPage, $page);
    }

    /** @return iterable<int,Schema\LicenseSimple>|WithoutBody */
    public function getAllCommonlyUsedListing(bool $featured, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->licenses👷GetAllCommonlyUsedListing()->call($featured, $perPage, $page);
    }

    /** @return */
    public function get(string $license): License|WithoutBody
    {
        return $this->operators->licenses👷Get()->call($license);
    }

    /** @return */
    public function getForRepo(string $owner, string $repo): LicenseContent
    {
        return $this->operators->licenses👷GetForRepo()->call($owner, $repo);
    }
}

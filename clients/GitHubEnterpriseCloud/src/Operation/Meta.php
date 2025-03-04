<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Root;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\ResponseInterface;

final class Meta
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function root(): Root
    {
        return $this->operators->meta👷Root()->call();
    }

    /** @return */
    public function get(): ApiOverview|WithoutBody
    {
        return $this->operators->meta👷Get()->call();
    }

    /** @return */
    public function getOctocat(string $s): ResponseInterface
    {
        return $this->operators->meta👷GetOctocat()->call($s);
    }

    /** @return Observable<string> */
    public function getAllVersions(): iterable
    {
        return $this->operators->meta👷GetAllVersions()->call();
    }

    /** @return */
    public function getZen(): string
    {
        return $this->operators->meta👷GetZen()->call();
    }
}

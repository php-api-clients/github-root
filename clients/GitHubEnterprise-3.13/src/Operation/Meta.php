<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;
use ApiClients\Client\GitHubEnterprise\Schema\Root;
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

    public function getZen(): string
    {
        return $this->operators->meta👷GetZen()->call();
    }
}

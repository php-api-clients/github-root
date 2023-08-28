<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Meta\Root\Response\ApplicationJson\Ok;
use Psr\Http\Message\ResponseInterface;

final class Meta
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\Operations\Meta\Root\Response\ApplicationJson\Ok */
    public function root(): Ok|array
    {
        return $this->operators->meta👷Root()->call();
    }

    /** @return Schema\ApiOverview|array{code:int} */
    public function get(): ApiOverview|array
    {
        return $this->operators->meta👷Get()->call();
    }

    /** @return ResponseInterface */
    public function getOctocat(string $s): ResponseInterface|array
    {
        return $this->operators->meta👷GetOctocat()->call($s);
    }

    /** @return string */
    public function getZen(): array|string
    {
        return $this->operators->meta👷GetZen()->call();
    }
}

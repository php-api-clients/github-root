<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\ApiOverview;
use ApiClients\Client\GitHubAE\Schema\Root;
use Psr\Http\Message\ResponseInterface;

final class Meta
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\Root */
    public function root(): Root|array
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

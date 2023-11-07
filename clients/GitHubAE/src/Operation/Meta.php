<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\ApiOverview;
use ApiClients\Client\GitHubAE\Schema\Root;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\ResponseInterface;

final class Meta
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function root(): Root
    {
        return $this->operators->meta👷Root()->call();
    }

    public function get(): ApiOverview|WithoutBody
    {
        return $this->operators->meta👷Get()->call();
    }

    public function getOctocat(string $s): ResponseInterface
    {
        return $this->operators->meta👷GetOctocat()->call($s);
    }

    public function getZen(): string
    {
        return $this->operators->meta👷GetZen()->call();
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Markdown
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function render(array $params): WithoutBody|string
    {
        return $this->operators->markdown👷Render()->call($params);
    }

    public function renderRaw(array $params): WithoutBody|string
    {
        return $this->operators->markdown👷RenderRaw()->call($params);
    }
}

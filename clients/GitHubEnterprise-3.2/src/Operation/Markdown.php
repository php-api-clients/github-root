<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Markdown
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function render(array $params): WithoutBody|string
    {
        return $this->operators->markdown👷Render()->call($params);
    }

    /** @return */
    public function renderRaw(array $params): WithoutBody|string
    {
        return $this->operators->markdown👷RenderRaw()->call($params);
    }
}

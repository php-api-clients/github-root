<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;

final class Markdown
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return string|array{code:int} */
    public function render(array $params): array|string
    {
        return $this->operators->markdown👷Render()->call($params);
    }

    /** @return string|array{code:int} */
    public function renderRaw(array $params): array|string
    {
        return $this->operators->markdown👷RenderRaw()->call($params);
    }
}

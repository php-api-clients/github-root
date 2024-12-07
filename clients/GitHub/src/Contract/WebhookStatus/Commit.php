<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookStatus;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Author $author
 * @property string $commentsUrl
 * @property \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit $commit
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Committer $committer
 * @property string $htmlUrl
 * @property string $nodeId
 * @property array $parents
 * @property string $sha
 * @property string $url
 */
interface Commit
{
}

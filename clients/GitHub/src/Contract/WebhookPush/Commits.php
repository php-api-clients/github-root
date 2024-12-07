<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPush;

/**
 * @property ?array $added
 * @property \ApiClients\Client\GitHub\Schema\WebhookPush\Commits\Author $author
 * @property \ApiClients\Client\GitHub\Schema\WebhookPush\Commits\Committer $committer
 * @property bool $distinct
 * @property string $id
 * @property string $message
 * @property ?array $modified
 * @property ?array $removed
 * @property string $timestamp
 * @property string $treeId
 * @property string $url
 */
interface Commits
{
}

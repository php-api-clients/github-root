<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPush;

use ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit\Author;
use ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit\Committer;

/**
 * @property ?array $added
 * @property Author $author
 * @property Committer $committer
 * @property bool $distinct
 * @property string $id
 * @property string $message
 * @property ?array $modified
 * @property ?array $removed
 * @property string $timestamp
 * @property string $treeId
 * @property string $url
 */
interface HeadCommit
{
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookStatus\Commit;

use ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Author;
use ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Committer;
use ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Tree;
use ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Verification;

/**
 * @property Author $author
 * @property int $commentCount
 * @property Committer $committer
 * @property string $message
 * @property Tree $tree
 * @property string $url
 * @property Verification $verification
 */
interface Commit
{
}

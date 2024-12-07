<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookStatus\Commit;

/**
 * @property \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Author $author
 * @property int $commentCount
 * @property \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Committer $committer
 * @property string $message
 * @property \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Tree $tree
 * @property string $url
 * @property \ApiClients\Client\GitHub\Schema\WebhookStatus\Commit\Commit\Verification $verification
 */
interface Commit
{
}

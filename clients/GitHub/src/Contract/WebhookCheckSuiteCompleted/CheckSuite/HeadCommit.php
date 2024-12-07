<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteCompleted\CheckSuite;

use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Committer;

/**
 * @property Author $author
 * @property Committer $committer
 * @property string $id
 * @property string $message
 * @property string $timestamp
 * @property string $treeId
 */
interface HeadCommit
{
}

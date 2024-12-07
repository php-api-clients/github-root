<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateOrUpdateFileContents\Request;

use ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson\Author;
use ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson\Committer;

/**
 * @property string $message
 * @property string $content
 * @property ?string $sha
 * @property ?string $branch
 * @property ?Committer $committer
 * @property ?Author $author
 */
interface ApplicationJson
{
}

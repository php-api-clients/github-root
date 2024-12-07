<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\DeleteFile\Request;

use ApiClients\Client\GitHub\Schema\Repos\DeleteFile\Request\ApplicationJson\Author;
use ApiClients\Client\GitHub\Schema\Repos\DeleteFile\Request\ApplicationJson\Committer;

/**
 * @property string $message
 * @property string $sha
 * @property ?string $branch
 * @property ?Committer $committer
 * @property ?Author $author
 */
interface ApplicationJson
{
}

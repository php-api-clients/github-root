<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\DeleteFile\Request;

/**
 * @property string $message
 * @property string $sha
 * @property ?string $branch
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\DeleteFile\Request\ApplicationJson\Committer $committer
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\DeleteFile\Request\ApplicationJson\Author $author
 */
interface ApplicationJson
{
}

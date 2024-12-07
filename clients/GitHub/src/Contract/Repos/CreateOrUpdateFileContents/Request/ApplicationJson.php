<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Repos\CreateOrUpdateFileContents\Request;

/**
 * @property string $message
 * @property string $content
 * @property ?string $sha
 * @property ?string $branch
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson\Committer $committer
 * @property ?\ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson\Author $author
 */
interface ApplicationJson
{
}

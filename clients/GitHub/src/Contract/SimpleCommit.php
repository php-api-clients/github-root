<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $id
 * @property string $treeId
 * @property string $message
 * @property string $timestamp
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleCommit\Author $author
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleCommit\Committer $committer
 */
interface SimpleCommit
{
}

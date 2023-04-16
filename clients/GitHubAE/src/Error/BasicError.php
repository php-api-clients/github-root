<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Error;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class BasicError extends \Error
{
    public function __construct(public int $status, public Schema\BasicError $error)
    {
    }
}

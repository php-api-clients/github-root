<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Error;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ScimError extends \Error
{
    public function __construct(public Schema\ScimError $error)
    {
    }
}

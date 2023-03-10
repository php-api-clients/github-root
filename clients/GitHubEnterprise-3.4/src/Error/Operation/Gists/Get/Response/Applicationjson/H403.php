<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Error\Operation\Gists\Get\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class H403 extends \Error
{
    public function __construct(public Schema\Operation\Gists\Get\Response\Applicationjson\H403 $error)
    {
    }
}

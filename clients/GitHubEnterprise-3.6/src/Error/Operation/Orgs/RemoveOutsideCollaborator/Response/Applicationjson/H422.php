<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Error\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class H422 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422 $error)
    {
    }
}

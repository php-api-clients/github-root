<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Error\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class H503 extends \Error
{
    public function __construct(public Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503 $error)
    {
    }
}

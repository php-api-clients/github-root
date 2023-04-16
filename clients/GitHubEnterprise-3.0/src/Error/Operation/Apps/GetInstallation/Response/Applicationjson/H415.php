<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Error\Operation\Apps\GetInstallation\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Schema;
use Error;

final class H415 extends Error
{
    public function __construct(public int $status, public Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415 $error)
    {
    }
}

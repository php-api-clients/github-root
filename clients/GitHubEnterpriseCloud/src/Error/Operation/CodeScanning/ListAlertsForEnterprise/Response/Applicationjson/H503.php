<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Error\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use Error;

final class H503 extends Error
{
    public function __construct(public int $status, public Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503 $error)
    {
    }
}

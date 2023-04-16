<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class H422 extends Error
{
    public function __construct(public int $status, public Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422 $error)
    {
    }
}

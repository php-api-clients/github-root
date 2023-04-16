<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operation\Projects\DeleteCard\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class H403 extends Error
{
    public function __construct(public int $status, public Schema\Operation\Projects\DeleteCard\Response\Applicationjson\H403 $error)
    {
    }
}

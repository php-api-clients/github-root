<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class UnprocessableEntity extends Error
{
    public function __construct(public int $status, public Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity $error)
    {
    }
}

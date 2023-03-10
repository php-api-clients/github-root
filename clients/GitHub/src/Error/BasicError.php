<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class BasicError extends \Error
{
    public function __construct(public Schema\BasicError $error)
    {
    }
}

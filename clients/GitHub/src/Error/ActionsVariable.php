<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class ActionsVariable extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ActionsVariable $error)
    {
    }
}

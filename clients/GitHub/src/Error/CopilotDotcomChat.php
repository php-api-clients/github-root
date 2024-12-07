<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class CopilotDotcomChat extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotDotcomChat $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\GpgKey;

final class Emails extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GpgKey\Emails $error)
    {
    }
}

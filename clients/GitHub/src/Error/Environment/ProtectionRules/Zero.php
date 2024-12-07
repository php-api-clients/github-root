<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Environment\ProtectionRules;

final class Zero extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\Zero $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Issue\Labels;

final class One extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Issue\Labels\One $error)
    {
    }
}

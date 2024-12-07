<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class DiffEntry extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\DiffEntry $error)
    {
    }
}

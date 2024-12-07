<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\GistSimple;

final class Forks extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\GistSimple\Forks $error)
    {
    }
}

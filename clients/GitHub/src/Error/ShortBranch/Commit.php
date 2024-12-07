<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\ShortBranch;

final class Commit extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ShortBranch\Commit $error)
    {
    }
}

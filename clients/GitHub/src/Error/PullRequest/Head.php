<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\PullRequest;

final class Head extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PullRequest\Head $error)
    {
    }
}

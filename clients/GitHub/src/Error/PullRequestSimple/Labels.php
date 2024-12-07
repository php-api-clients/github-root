<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\PullRequestSimple;

final class Labels extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PullRequestSimple\Labels $error)
    {
    }
}

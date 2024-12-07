<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class PullRequestMergeResult extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PullRequestMergeResult $error)
    {
    }
}

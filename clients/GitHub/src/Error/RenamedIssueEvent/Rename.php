<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\RenamedIssueEvent;

final class Rename extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RenamedIssueEvent\Rename $error)
    {
    }
}

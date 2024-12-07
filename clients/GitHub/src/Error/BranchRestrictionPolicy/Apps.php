<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\BranchRestrictionPolicy;

final class Apps extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps $error)
    {
    }
}

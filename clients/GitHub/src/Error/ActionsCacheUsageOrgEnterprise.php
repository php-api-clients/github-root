<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class ActionsCacheUsageOrgEnterprise extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\ActionsBillingUsage;

final class MinutesUsedBreakdown extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown $error)
    {
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ProtectedBranch;

use Error;

final class RequiredConversationResolution extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ProtectedBranch\RequiredConversationResolution $error)
    {
    }
}

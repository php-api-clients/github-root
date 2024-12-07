<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookRepositoryRulesetEdited\Changes\Rules\Updated;

final class Changes extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Updated\Changes $error)
    {
    }
}

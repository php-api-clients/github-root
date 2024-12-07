<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookIssuesDeleted;

final class Issue extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue $error)
    {
    }
}

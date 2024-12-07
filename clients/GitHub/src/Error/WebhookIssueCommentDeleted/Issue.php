<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookIssueCommentDeleted;

final class Issue extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue $error)
    {
    }
}

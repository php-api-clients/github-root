<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookIssueCommentCreated\Issue;

final class User extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Issue\User $error)
    {
    }
}

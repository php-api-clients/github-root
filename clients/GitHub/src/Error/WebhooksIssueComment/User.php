<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhooksIssueComment;

final class User extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksIssueComment\User $error)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

final class WebhookIssuesDeleted extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted $error)
    {
    }
}

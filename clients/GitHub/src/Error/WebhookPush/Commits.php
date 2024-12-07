<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookPush;

final class Commits extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPush\Commits $error)
    {
    }
}

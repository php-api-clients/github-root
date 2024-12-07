<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookTeamEdited\Changes\Repository\Permissions;

final class From extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\Repository\Permissions\From $error)
    {
    }
}

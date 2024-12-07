<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\PersonalAccessTokenRequest;

final class PermissionsAdded extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded $error)
    {
    }
}

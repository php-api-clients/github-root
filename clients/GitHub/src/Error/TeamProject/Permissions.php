<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\TeamProject;

final class Permissions extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\TeamProject\Permissions $error)
    {
    }
}

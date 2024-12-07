<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Gists\Create\Request\ApplicationJson;

final class Files extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Gists\Create\Request\ApplicationJson\Files $error)
    {
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\UploadReleaseAsset\Request;

use Error;

final class ApplicationOctetStream extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream $error)
    {
    }
}

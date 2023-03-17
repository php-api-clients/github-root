<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Error\Operation\Projects\DeleteCard\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class H403 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Projects\DeleteCard\Response\Applicationjson\H403 $error)
    {
    }
}

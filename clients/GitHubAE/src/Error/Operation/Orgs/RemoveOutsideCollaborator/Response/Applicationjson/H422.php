<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Error\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class H422 extends \Error
{
    public function __construct(public Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422 $error)
    {
    }
}

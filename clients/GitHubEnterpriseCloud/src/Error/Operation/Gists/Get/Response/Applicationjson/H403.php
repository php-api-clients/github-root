<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Error\Operation\Gists\Get\Response\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class H403 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Gists\Get\Response\Applicationjson\H403 $error)
    {
    }
}

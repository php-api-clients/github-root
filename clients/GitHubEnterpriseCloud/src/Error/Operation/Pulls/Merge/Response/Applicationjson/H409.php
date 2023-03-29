<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Error\Operation\Pulls\Merge\Response\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class H409 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Pulls\Merge\Response\Applicationjson\H409 $error)
    {
    }
}

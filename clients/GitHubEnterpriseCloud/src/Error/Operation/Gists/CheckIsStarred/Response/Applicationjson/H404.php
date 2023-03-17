<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Error\Operation\Gists\CheckIsStarred\Response\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class H404 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404 $error)
    {
    }
}

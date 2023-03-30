<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\AliasAbstract;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
abstract readonly class Abstract47c5efdd650c68e60f894b5d312f53c8
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false}';
    public function __construct(public ?bool $enabled)
    {
    }
}

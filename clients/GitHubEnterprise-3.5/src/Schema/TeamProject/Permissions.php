<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\TeamProject;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["read","write","admin"],"type":"object","properties":{"read":{"type":"boolean"},"write":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"read":false,"write":false,"admin":false}';
    public ?bool $read;
    public ?bool $write;
    public ?bool $admin;
    public function __construct(bool $read, bool $write, bool $admin)
    {
        $this->read = $read;
        $this->write = $write;
        $this->admin = $admin;
    }
}

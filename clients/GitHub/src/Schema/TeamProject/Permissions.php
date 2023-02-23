<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\TeamProject;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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

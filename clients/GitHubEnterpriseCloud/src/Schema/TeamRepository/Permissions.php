<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamRepository;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"admin":false,"pull":false,"triage":false,"push":false,"maintain":false}';
    public function __construct(public bool $admin, public bool $pull, public ?bool $triage, public bool $push, public ?bool $maintain)
    {
    }
}

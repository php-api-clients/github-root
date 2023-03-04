<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\OrgMembership;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"can_create_repository":false}';
    public ?bool $can_create_repository;
    public function __construct(bool $can_create_repository)
    {
        $this->can_create_repository = $can_create_repository;
    }
}

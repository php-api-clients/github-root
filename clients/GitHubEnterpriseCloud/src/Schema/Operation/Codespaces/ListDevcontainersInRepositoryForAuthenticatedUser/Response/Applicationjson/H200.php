<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"devcontainers":[{"path":"generated_path","name":"generated_name"}]}';
    public ?int $total_count;
    /**
     * @var array<Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200\Devcontainers>
     */
    public ?array $devcontainers;
    public function __construct(int $total_count, array $devcontainers)
    {
        $this->total_count = $total_count;
        $this->devcontainers = $devcontainers;
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\Dependabot\ListRepoSecrets\Response\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Dependabot Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["MY_ARTIFACTORY_PASSWORD"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for Dependabot."}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"secrets":[{"name":"MY_ARTIFACTORY_PASSWORD","created_at":"generated_created_at","updated_at":"generated_updated_at"}]}';
    public ?int $total_count;
    /**
     * @var array<Schema\DependabotSecret>
     */
    public ?array $secrets;
    public function __construct(int $total_count, array $secrets)
    {
        $this->total_count = $total_count;
        $this->secrets = $secrets;
    }
}

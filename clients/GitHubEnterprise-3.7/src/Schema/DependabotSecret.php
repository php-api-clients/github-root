<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class DependabotSecret
{
    public const SCHEMA_JSON = '{"title":"Dependabot Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["MY_ARTIFACTORY_PASSWORD"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for Dependabot."}';
    public const SCHEMA_TITLE = 'Dependabot Secret';
    public const SCHEMA_DESCRIPTION = 'Set secrets for Dependabot.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"MY_ARTIFACTORY_PASSWORD","created_at":"generated_created_at","updated_at":"generated_updated_at"}';
    /**
     * name: The name of the secret.
     */
    public function __construct(public ?string $name, public ?string $created_at, public ?string $updated_at)
    {
    }
}

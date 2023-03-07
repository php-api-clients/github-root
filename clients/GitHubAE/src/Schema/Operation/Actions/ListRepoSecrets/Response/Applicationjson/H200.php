<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListRepoSecrets\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Actions Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for GitHub Actions."}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"secrets":[{"name":"SECRET_TOKEN","created_at":"generated_created_at","updated_at":"generated_updated_at"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\ActionsSecret> $secrets
     */
    public function __construct(public ?int $total_count, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ActionsSecret::class)] public ?array $secrets)
    {
    }
}

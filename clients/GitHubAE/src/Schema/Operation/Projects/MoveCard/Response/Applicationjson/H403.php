<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","documentation_url":"generated_documentation_url","errors":[{"code":"generated_code","message":"generated_message","resource":"generated_resource","field":"generated_field"}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHubAE\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403\Errors> $errors
     */
    public function __construct(public ?string $message, public ?string $documentation_url, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403\Errors::class)] public ?array $errors)
    {
    }
}

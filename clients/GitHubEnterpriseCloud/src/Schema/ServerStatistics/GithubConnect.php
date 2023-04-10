<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class GithubConnect
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"features_enabled":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"features_enabled":["generated_features_enabled_null"]}';
    /**
     * @param ?array<string> $featuresEnabled
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('features_enabled')] public ?array $featuresEnabled)
    {
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\GetInstallation\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class UnsupportedMediaType
{
    public const SCHEMA_JSON         = '{"required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated"}';

    public function __construct(public string $message, #[MapFrom('documentation_url')]
    public string $documentationUrl,)
    {
    }
}

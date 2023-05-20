<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity;

final readonly class Errors
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"resource":{"type":"string"},"code":{"type":"string"},"message":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"resource":"generated","code":"generated","message":"generated"}';

    public function __construct(public ?string $resource, public ?string $code, public ?string $message)
    {
    }
}

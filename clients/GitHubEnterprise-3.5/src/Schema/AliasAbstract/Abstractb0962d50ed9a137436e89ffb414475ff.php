<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractb0962d50ed9a137436e89ffb414475ff
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"resource":{"type":"string"},"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","errors":[{"resource":"generated_resource_null","code":"generated_code_null","message":"generated_message_null"}]}';
    /**
     * @param ?array<\ApiClients\Client\Github\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors> $errors
     */
    public function __construct(public ?string $message, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors::class)] public ?array $errors)
    {
    }
}

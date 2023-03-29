<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\SetInformationForProvisionedUser\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Name
{
    public const SCHEMA_JSON = '{"required":["givenName","familyName"],"type":"object","properties":{"givenName":{"type":"string"},"familyName":{"type":"string"},"formatted":{"type":"string"}},"example":{"givenName":"Jane","familyName":"User"}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"givenName":"Jane","familyName":"User","formatted":"generated_formatted_null"}';
    public function __construct(public string $givenName, public string $familyName, public ?string $formatted)
    {
    }
}

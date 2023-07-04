<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request\ApplicationJson\Operations\Value;

final readonly class Zero
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"active":{"type":["boolean","null"]},"userName":{"type":["string","null"]},"externalId":{"type":["string","null"]},"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"active":false,"userName":"generated","externalId":"generated","givenName":"generated","familyName":"generated"}';

    public function __construct(public bool|null $active, public string|null $userName, public string|null $externalId, public string|null $givenName, public string|null $familyName)
    {
    }
}

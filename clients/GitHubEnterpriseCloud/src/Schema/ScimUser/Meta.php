<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Meta
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"resourceType":{"type":"string","examples":["User"]},"created":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"lastModified":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"location":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"resourceType":"User","created":"2019-01-24T22:45:36.000Z","lastModified":"2019-01-24T22:45:36.000Z","location":"https:\\/\\/api.github.com\\/scim\\/v2\\/organizations\\/myorg-123abc55141bfd8f\\/Users\\/c42772b5-2029-11e9-8543-9264a97dec8d"}';
    public function __construct(public ?string $resourceType, public ?string $created, public ?string $lastModified, public ?string $location)
    {
    }
}

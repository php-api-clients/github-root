<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookProjectsV2ItemEdited\Changes;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class FieldValue
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"field_node_id":{"type":"string"},"field_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"field_node_id":"generated_field_node_id","field_type":"generated_field_type"}';
    public function __construct(public ?string $field_node_id, public ?string $field_type)
    {
    }
}

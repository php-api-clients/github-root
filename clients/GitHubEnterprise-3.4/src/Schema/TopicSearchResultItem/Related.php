<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\TopicSearchResultItem;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Related
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"topic_relation":{"id":13,"name":"generated_name","topic_id":13,"relation_type":"generated_relation_type"}}';
    public function __construct(public ?Schema\TopicSearchResultItem\Related\TopicRelation $topic_relation)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\TopicSearchResultItem\Related;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class TopicRelation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","topic_id":13,"relation_type":"generated_relation_type"}';
    public function __construct(public ?int $id, public ?string $name, public ?int $topic_id, public ?string $relation_type)
    {
    }
}

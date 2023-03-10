<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDiscussionLabeled;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Label
{
    public const SCHEMA_JSON = '{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"color":"generated_color","default":false,"description":"generated_description","id":13,"name":"generated_name","node_id":"generated_node_id","url":"generated_url"}';
    /**
     * color: 6-character hex code, without the leading #, identifying the color
     * name: The name of the label.
     * url: URL for the label
     */
    public function __construct(public string $color, public bool $default, public ?string $description, public int $id, public string $name, public string $node_id, public string $url)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Git\CreateTag\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag","message","object","type"],"type":"object","properties":{"tag":{"type":"string","description":"The tag\'s name. This is typically a version (e.g., \\"v0.0.1\\")."},"message":{"type":"string","description":"The tag message."},"object":{"type":"string","description":"The SHA of the git object this is tagging."},"type":{"enum":["commit","tree","blob"],"type":"string","description":"The type of the object we\'re tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`."},"tagger":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author of the tag"},"email":{"type":"string","description":"The email of the author of the tag"},"date":{"type":"string","description":"When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"An object with information about the individual creating the tag."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag":"generated_tag","message":"generated_message","object":"generated_object","type":"generated_type","tagger":{"name":"generated_name","email":"generated_email","date":"generated_date"}}';
    /**
     * tag: The tag's name. This is typically a version (e.g., "v0.0.1").
     * message: The tag message.
     * object: The SHA of the git object this is tagging.
     * type: The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     * tagger: An object with information about the individual creating the tag.
     */
    public function __construct(public string $tag, public string $message, public string $object, public string $type, public ?Schema\Git\CreateTag\Request\Applicationjson\Tagger $tagger)
    {
    }
}

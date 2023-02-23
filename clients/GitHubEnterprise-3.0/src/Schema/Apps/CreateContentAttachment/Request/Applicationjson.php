<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Apps\CreateContentAttachment\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["title","body"],"type":"object","properties":{"title":{"maxLength":1024,"type":"string","description":"The title of the attachment","examples":["Title of the attachment"]},"body":{"maxLength":262144,"type":"string","description":"The body of the attachment","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"Title of the attachment","body":"Body of the attachment"}';
    /**
     * The title of the attachment
     */
    public ?string $title;
    /**
     * The body of the attachment
     */
    public ?string $body;
    public function __construct(string $title, string $body)
    {
        $this->title = $title;
        $this->body = $body;
    }
}

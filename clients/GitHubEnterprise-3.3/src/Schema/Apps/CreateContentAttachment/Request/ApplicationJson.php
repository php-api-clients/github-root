<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Apps\CreateContentAttachment\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["title","body"],"type":"object","properties":{"title":{"maxLength":1024,"type":"string","description":"The title of the attachment","examples":["Title of the attachment"]},"body":{"maxLength":262144,"type":"string","description":"The body of the attachment","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"Title of the attachment","body":"Body of the attachment"}';

    /**
     * title: The title of the attachment
     * body: The body of the attachment
     */
    public function __construct(public string $title, public string $body)
    {
    }
}

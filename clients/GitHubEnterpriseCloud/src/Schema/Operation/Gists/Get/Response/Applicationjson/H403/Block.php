<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Gists\Get\Response\Applicationjson\H403;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Block
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"reason":"generated_reason","created_at":"generated_created_at","html_url":"generated_html_url"}';
    public ?string $reason;
    public ?string $created_at;
    public ?string $html_url;
    public function __construct(string $reason, string $created_at, string $html_url)
    {
        $this->reason = $reason;
        $this->created_at = $created_at;
        $this->html_url = $html_url;
    }
}

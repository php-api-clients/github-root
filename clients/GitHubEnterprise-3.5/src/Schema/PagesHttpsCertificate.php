<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PagesHttpsCertificate
{
    public const SCHEMA_JSON = '{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}}';
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"approved","description":"Certificate is approved","domains":["www.example.com"],"expires_at":"generated_expires_at"}';
    public ?string $state;
    public ?string $description;
    /**
     * Array of the domain set and its alternate name (if it is configured)
     * @var array<string>
     */
    public ?array $domains;
    public string $expires_at;
    public function __construct(string $state, string $description, array $domains, string $expires_at)
    {
        $this->state = $state;
        $this->description = $description;
        $this->domains = $domains;
        $this->expires_at = $expires_at;
    }
}

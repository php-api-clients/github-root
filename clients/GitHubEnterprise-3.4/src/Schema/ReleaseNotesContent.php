<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ReleaseNotesContent
{
    public const SCHEMA_JSON = '{"title":"Generated Release Notes Content","required":["name","body"],"type":"object","properties":{"name":{"type":"string","description":"The generated name of the release","examples":["Release v1.0.0 is now available!"]},"body":{"type":"string","description":"The generated body describing the contents of the release supporting markdown formatting"}},"description":"Generated name and body describing a release"}';
    public const SCHEMA_TITLE = 'Generated Release Notes Content';
    public const SCHEMA_DESCRIPTION = 'Generated name and body describing a release';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Release v1.0.0 is now available!","body":"generated_body"}';
    /**
     * The generated name of the release
     */
    public ?string $name;
    /**
     * The generated body describing the contents of the release supporting markdown formatting
     */
    public ?string $body;
    public function __construct(string $name, string $body)
    {
        $this->name = $name;
        $this->body = $body;
    }
}

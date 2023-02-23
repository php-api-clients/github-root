<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateAutolink\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key_prefix","url_template"],"type":"object","properties":{"key_prefix":{"type":"string","description":"The prefix appended by a number will generate a link any time it is found in an issue, pull request, or commit."},"url_template":{"type":"string","description":"The URL must contain `<num>` for the reference number."},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key_prefix":"generated_key_prefix","url_template":"generated_url_template","is_alphanumeric":false}';
    /**
     * The prefix appended by a number will generate a link any time it is found in an issue, pull request, or commit.
     */
    public ?string $key_prefix;
    /**
     * The URL must contain `<num>` for the reference number.
     */
    public ?string $url_template;
    /**
     * Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.
     */
    public bool $is_alphanumeric;
    public function __construct(string $key_prefix, string $url_template, bool $is_alphanumeric)
    {
        $this->key_prefix = $key_prefix;
        $this->url_template = $url_template;
        $this->is_alphanumeric = $is_alphanumeric;
    }
}

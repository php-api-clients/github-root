<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class UserNameResponse
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"formatted":{"type":"string","description":"The full name, including all middle names, titles, and suffixes as appropriate, formatted for display.","examples":["Ms. Mona Lisa Octocat"]},"familyName":{"type":"string","description":"The family name of the user.","examples":["Octocat"]},"givenName":{"type":"string","description":"The given name of the user.","examples":["Mona"]},"middleName":{"type":"string","description":"The middle name(s) of the user.","examples":["Lisa"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"formatted":"Ms. Mona Lisa Octocat","familyName":"Octocat","givenName":"Mona","middleName":"Lisa"}';
    /**
     * The full name, including all middle names, titles, and suffixes as appropriate, formatted for display.
     */
    public ?string $formatted;
    /**
     * The family name of the user.
     */
    public ?string $familyName;
    /**
     * The given name of the user.
     */
    public ?string $givenName;
    /**
     * The middle name(s) of the user.
     */
    public ?string $middleName;
    public function __construct(string $formatted, string $familyName, string $givenName, string $middleName)
    {
        $this->formatted = $formatted;
        $this->familyName = $familyName;
        $this->givenName = $givenName;
        $this->middleName = $middleName;
    }
}

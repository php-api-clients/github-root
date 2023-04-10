<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryAdvisory;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Credits
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"string","description":"The username of the user credited."},"type":{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login_null","type":"analyst"}';
    /**
     * login: The username of the user credited.
     * type: The type of credit the user is receiving.
     */
    public function __construct(public ?string $login, public ?string $type)
    {
    }
}

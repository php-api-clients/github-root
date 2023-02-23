<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\GpgKey;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Emails
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated_email","verified":false}';
    public ?string $email;
    public ?bool $verified;
    public function __construct(string $email, bool $verified)
    {
        $this->email = $email;
        $this->verified = $verified;
    }
}

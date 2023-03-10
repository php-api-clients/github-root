<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\ApiOverview;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class SshKeyFingerprints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"SHA256_RSA":"generated_SHA256_RSA","SHA256_DSA":"generated_SHA256_DSA","SHA256_ECDSA":"generated_SHA256_ECDSA","SHA256_ED25519":"generated_SHA256_ED25519"}';
    public function __construct(public ?string $SHA256_RSA, public ?string $SHA256_DSA, public ?string $SHA256_ECDSA, public ?string $SHA256_ED25519)
    {
    }
}

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
    public const SCHEMA_EXAMPLE_DATA = '{"sha256Rsa":"generated_SHA256_RSA_null","sha256Dsa":"generated_SHA256_DSA_null","sha256Ecdsa":"generated_SHA256_ECDSA_null","sha256Ed25519":"generated_SHA256_ED25519_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('SHA256_RSA')] public ?string $sha256Rsa, #[\EventSauce\ObjectHydrator\MapFrom('SHA256_DSA')] public ?string $sha256Dsa, #[\EventSauce\ObjectHydrator\MapFrom('SHA256_ECDSA')] public ?string $sha256Ecdsa, #[\EventSauce\ObjectHydrator\MapFrom('SHA256_ED25519')] public ?string $sha256Ed25519)
    {
    }
}

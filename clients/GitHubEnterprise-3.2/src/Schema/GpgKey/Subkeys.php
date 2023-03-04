<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\GpgKey;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Subkeys
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"primary_key_id":13,"key_id":"generated_key_id","public_key":"generated_public_key","emails":[null],"subkeys":[null],"can_sign":false,"can_encrypt_comms":false,"can_encrypt_storage":false,"can_certify":false,"created_at":"generated_created_at","expires_at":"generated_expires_at","raw_key":"generated_raw_key"}';
    public ?int $id;
    public ?int $primary_key_id;
    public ?string $key_id;
    public ?string $public_key;
    /**
     * @var array<mixed>
     */
    public ?array $emails;
    /**
     * @var array<mixed>
     */
    public ?array $subkeys;
    public ?bool $can_sign;
    public ?bool $can_encrypt_comms;
    public ?bool $can_encrypt_storage;
    public ?bool $can_certify;
    public ?string $created_at;
    public ?string $expires_at;
    public ?string $raw_key;
    public function __construct(int $id, int $primary_key_id, string $key_id, string $public_key, array $emails, array $subkeys, bool $can_sign, bool $can_encrypt_comms, bool $can_encrypt_storage, bool $can_certify, string $created_at, string $expires_at, string $raw_key)
    {
        $this->id = $id;
        $this->primary_key_id = $primary_key_id;
        $this->key_id = $key_id;
        $this->public_key = $public_key;
        $this->emails = $emails;
        $this->subkeys = $subkeys;
        $this->can_sign = $can_sign;
        $this->can_encrypt_comms = $can_encrypt_comms;
        $this->can_encrypt_storage = $can_encrypt_storage;
        $this->can_certify = $can_certify;
        $this->created_at = $created_at;
        $this->expires_at = $expires_at;
        $this->raw_key = $raw_key;
    }
}

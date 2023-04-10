<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class GpgKey
{
    public const SCHEMA_JSON = '{"title":"GPG Key","required":["id","primary_key_id","key_id","raw_key","public_key","created_at","expires_at","can_sign","can_encrypt_comms","can_encrypt_storage","can_certify","emails","subkeys"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"primary_key_id":{"type":["integer","null"]},"key_id":{"type":"string","examples":["3262EFF25BA0D270"]},"public_key":{"type":"string","examples":["xsBNBFayYZ..."]},"emails":{"type":"array","items":{"type":"object","properties":{"email":{"type":"string"},"verified":{"type":"boolean"}}},"examples":[{"email":"octocat@users.noreply.github.com","verified":true}]},"subkeys":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"primary_key_id":{"type":"integer"},"key_id":{"type":"string"},"public_key":{"type":"string"},"emails":{"type":"array","items":{}},"subkeys":{"type":"array","items":{}},"can_sign":{"type":"boolean"},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean"},"created_at":{"type":"string"},"expires_at":{"type":["string","null"]},"raw_key":{"type":["string","null"]}}},"examples":[{"id":4,"primary_key_id":3,"key_id":"4A595D4C72EE49C7","public_key":"zsBNBFayYZ...","emails":[],"subkeys":[],"can_sign":false,"can_encrypt_comms":true,"can_encrypt_storage":true,"can_certify":false,"created_at":"2016-03-24T11:31:04-06:00","expires_at":null}]},"can_sign":{"type":"boolean","examples":[true]},"can_encrypt_comms":{"type":"boolean"},"can_encrypt_storage":{"type":"boolean"},"can_certify":{"type":"boolean","examples":[true]},"created_at":{"type":"string","format":"date-time","examples":["2016-03-24T11:31:04-06:00"]},"expires_at":{"type":["string","null"],"format":"date-time"},"raw_key":{"type":["string","null"]}},"description":"A unique encryption key"}';
    public const SCHEMA_TITLE = 'GPG Key';
    public const SCHEMA_DESCRIPTION = 'A unique encryption key';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3,"primary_key_id":13,"key_id":"3262EFF25BA0D270","public_key":"xsBNBFayYZ...","emails":[{"email":"octocat@users.noreply.github.com","verified":true}],"subkeys":[{"id":4,"primary_key_id":3,"key_id":"4A595D4C72EE49C7","public_key":"zsBNBFayYZ...","emails":[null],"subkeys":[null],"can_sign":false,"can_encrypt_comms":true,"can_encrypt_storage":true,"can_certify":false,"created_at":"2016-03-24T11:31:04-06:00","expires_at":null,"raw_key":"generated_raw_key_null"}],"can_sign":true,"can_encrypt_comms":false,"can_encrypt_storage":false,"can_certify":true,"created_at":"2016-03-24T11:31:04-06:00","expires_at":"1970-01-01T00:00:00+00:00","raw_key":"generated_raw_key_null"}';
    /**
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\GpgKey\Emails> $emails
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\GpgKey\Subkeys> $subkeys
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('primary_key_id')] public ?int $primaryKeyId, #[\EventSauce\ObjectHydrator\MapFrom('key_id')] public string $keyId, #[\EventSauce\ObjectHydrator\MapFrom('public_key')] public string $publicKey, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GpgKey\Emails::class)] public array $emails, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\GpgKey\Subkeys::class)] public array $subkeys, #[\EventSauce\ObjectHydrator\MapFrom('can_sign')] public bool $canSign, #[\EventSauce\ObjectHydrator\MapFrom('can_encrypt_comms')] public bool $canEncryptComms, #[\EventSauce\ObjectHydrator\MapFrom('can_encrypt_storage')] public bool $canEncryptStorage, #[\EventSauce\ObjectHydrator\MapFrom('can_certify')] public bool $canCertify, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('expires_at')] public ?string $expiresAt, #[\EventSauce\ObjectHydrator\MapFrom('raw_key')] public ?string $rawKey)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

final readonly class PackageFiles implements \ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion\PackageFiles
{
    const SCHEMA_JSON = '{
    "required": [
        "download_url",
        "id",
        "name",
        "sha256",
        "sha1",
        "md5",
        "content_type",
        "state",
        "size",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "content_type": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "download_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "md5": {
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": "string"
        },
        "sha1": {
            "type": [
                "string",
                "null"
            ]
        },
        "sha256": {
            "type": [
                "string",
                "null"
            ]
        },
        "size": {
            "type": "integer"
        },
        "state": {
            "type": [
                "string",
                "null"
            ]
        },
        "updated_at": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "content_type": "generated",
    "created_at": "generated",
    "download_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "md5": "generated",
    "name": "generated",
    "sha1": "generated",
    "sha256": "generated",
    "size": 4,
    "state": "generated",
    "updated_at": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public string $contentType, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public string $downloadUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('md5')] public ?string $mdFive, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('sha1')] public ?string $shaOne, #[\EventSauce\ObjectHydrator\MapFrom('sha256')] public ?string $shaTwoHundredFiftySix, public int $size, public ?string $state, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt)
    {
    }
}

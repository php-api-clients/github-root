<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class CodeScanningSarifsStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"processing_status":{"enum":["pending","complete"],"type":"string","description":"`pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored."},"analyses_url":{"type":["string","null"],"description":"The REST API URL for getting the analyses associated with the upload.","format":"uri","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"processing_status":"pending","analyses_url":"https:\\/\\/example.com\\/"}';
    /**
     * processingStatus: `pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored.
     * analysesUrl: The REST API URL for getting the analyses associated with the upload.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('processing_status')] public ?string $processingStatus, #[\EventSauce\ObjectHydrator\MapFrom('analyses_url')] public ?string $analysesUrl)
    {
    }
}

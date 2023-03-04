<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class CodeScanningSarifsStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"processing_status":{"enum":["pending","complete"],"type":"string","description":"`pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored."},"analyses_url":{"type":["string","null"],"description":"The REST API URL for getting the analyses associated with the upload.","format":"uri","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"processing_status":"generated_processing_status","analyses_url":"generated_analyses_url"}';
    /**
     * `pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored.
     */
    public ?string $processing_status;
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    public ?string $analyses_url;
    public function __construct(string $processing_status, string $analyses_url)
    {
        $this->processing_status = $processing_status;
        $this->analyses_url = $analyses_url;
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Projects\DeleteCard\Response\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","documentation_url":"generated_documentation_url","errors":["generated_errors"]}';
    public ?string $message;
    public ?string $documentation_url;
    /**
     * @var array<string>
     */
    public ?array $errors;
    public function __construct(string $message, string $documentation_url, array $errors)
    {
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->errors = $errors;
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Actions\AddCustomLabelsToSelfHostedRunnerForOrg\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["labels"],"type":"object","properties":{"labels":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to add to the runner."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":["generated_labels"]}';
    /**
     * labels: The names of the custom labels to add to the runner.
     * @param array<string> $labels
     */
    public function __construct(public array $labels)
    {
    }
}

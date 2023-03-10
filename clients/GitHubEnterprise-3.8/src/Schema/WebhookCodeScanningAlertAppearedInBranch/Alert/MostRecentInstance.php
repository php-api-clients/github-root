<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class MostRecentInstance
{
    public const SCHEMA_JSON = '{"title":"Alert Instance","required":["ref","analysis_key","environment","state"],"type":["object","null"],"properties":{"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"classifications":{"type":"array","items":{"type":"string"}},"commit_sha":{"type":"string"},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"location":{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}},"message":{"type":"object","properties":{"text":{"type":"string"}}},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`."},"state":{"enum":["open","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."}}}';
    public const SCHEMA_TITLE = 'Alert Instance';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"analysis_key":"generated_analysis_key","classifications":["generated_classifications"],"commit_sha":"generated_commit_sha","environment":"generated_environment","location":{"end_column":13,"end_line":13,"path":"generated_path","start_column":13,"start_line":13},"message":{"text":"generated_text"},"ref":"generated_ref","state":"generated_state"}';
    /**
     * analysis_key: Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     * @param ?array<string> $classifications
     * environment: Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     * ref: The full Git reference, formatted as `refs/heads/<branch name>`.
     * state: State of a code scanning alert.
     */
    public function __construct(public string $analysis_key, public ?array $classifications, public ?string $commit_sha, public string $environment, public ?Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance\Location $location, public ?Schema\CodeScanningAlertInstance\Message $message, public string $ref, public string $state)
    {
    }
}

<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\CodeScanning\UploadSarif\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["commit_sha","ref","sarif"],"type":"object","properties":{"commit_sha":{"maxLength":40,"minLength":40,"pattern":"^[0-9a-fA-F]+$","type":"string","description":"The SHA of the commit to which the analysis you are uploading relates."},"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"sarif":{"type":"string","description":"A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http:\\/\\/www.gnu.org\\/software\\/gzip\\/manual\\/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see \\"[SARIF support for code scanning](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/code-security\\/secure-coding\\/sarif-support-for-code-scanning).\\""},"checkout_uri":{"type":"string","description":"The base directory used in the analysis, as it appears in the SARIF file.\\nThis property is used to convert file paths from absolute to relative, so that alerts can be mapped to their correct location in the repository.","format":"uri","examples":["file:\\/\\/\\/github\\/workspace\\/"]},"started_at":{"type":"string","description":"The time that the analysis run began. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"},"tool_name":{"type":"string","description":"The name of the tool used to generate the code scanning analysis. If this parameter is not used, the tool name defaults to \\"API\\". If the uploaded SARIF contains a tool GUID, this will be available for filtering using the `tool_guid` parameter of operations such as `GET \\/repos\\/{owner}\\/{repo}\\/code-scanning\\/alerts`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_sha":"generated_commit_sha_null","ref":"generated_ref_null","sarif":"generated_sarif_null","checkout_uri":"file:\\/\\/\\/github\\/workspace\\/","started_at":"1970-01-01T00:00:00+00:00","tool_name":"generated_tool_name_null"}';
    /**
    * commitSha: The SHA of the commit to which the analysis you are uploading relates.
    * ref: The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    * sarif: A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/enterprise-server@3.7/code-security/secure-coding/sarif-support-for-code-scanning)."
    * checkoutUri: The base directory used in the analysis, as it appears in the SARIF file.
    This property is used to convert file paths from absolute to relative, so that alerts can be mapped to their correct location in the repository.
    * startedAt: The time that the analysis run began. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * toolName: The name of the tool used to generate the code scanning analysis. If this parameter is not used, the tool name defaults to "API". If the uploaded SARIF contains a tool GUID, this will be available for filtering using the `tool_guid` parameter of operations such as `GET /repos/{owner}/{repo}/code-scanning/alerts`.
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('commit_sha')] public string $commitSha, public string $ref, public string $sarif, #[\EventSauce\ObjectHydrator\MapFrom('checkout_uri')] public ?string $checkoutUri, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public ?string $startedAt, #[\EventSauce\ObjectHydrator\MapFrom('tool_name')] public ?string $toolName)
    {
    }
}

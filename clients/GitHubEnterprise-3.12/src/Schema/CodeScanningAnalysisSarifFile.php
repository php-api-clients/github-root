<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class CodeScanningAnalysisSarifFile
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http:\\/\\/www.gnu.org\\/software\\/gzip\\/manual\\/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see \\"[SARIF support for code scanning](https:\\/\\/docs.github.com\\/enterprise-server@3.12\\/code-security\\/secure-coding\\/sarif-support-for-code-scanning).\\""
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A Base64 string representing the SARIF file to upload. You must first compress your SARIF file using [`gzip`](http://www.gnu.org/software/gzip/manual/gzip.html) and then translate the contents of the file into a Base64 encoding string. For more information, see "[SARIF support for code scanning](https://docs.github.com/enterprise-server@3.12/code-security/secure-coding/sarif-support-for-code-scanning)."';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}

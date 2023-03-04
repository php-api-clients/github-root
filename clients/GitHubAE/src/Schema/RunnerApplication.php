<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class RunnerApplication
{
    public const SCHEMA_JSON = '{"title":"Runner Application","required":["os","architecture","download_url","filename"],"type":"object","properties":{"os":{"type":"string"},"architecture":{"type":"string"},"download_url":{"type":"string"},"filename":{"type":"string"},"temp_download_token":{"type":"string","description":"A short lived bearer token used to download the runner, if needed."},"sha256_checksum":{"type":"string"}},"description":"Runner Application"}';
    public const SCHEMA_TITLE = 'Runner Application';
    public const SCHEMA_DESCRIPTION = 'Runner Application';
    public const SCHEMA_EXAMPLE_DATA = '{"os":"generated_os","architecture":"generated_architecture","download_url":"generated_download_url","filename":"generated_filename","temp_download_token":"generated_temp_download_token","sha256_checksum":"generated_sha256_checksum"}';
    public ?string $os;
    public ?string $architecture;
    public ?string $download_url;
    public ?string $filename;
    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    public string $temp_download_token;
    public string $sha256_checksum;
    public function __construct(string $os, string $architecture, string $download_url, string $filename, string $temp_download_token, string $sha256_checksum)
    {
        $this->os = $os;
        $this->architecture = $architecture;
        $this->download_url = $download_url;
        $this->filename = $filename;
        $this->temp_download_token = $temp_download_token;
        $this->sha256_checksum = $sha256_checksum;
    }
}

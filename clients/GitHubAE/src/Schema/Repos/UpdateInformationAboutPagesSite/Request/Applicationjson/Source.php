<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Repos\UpdateInformationAboutPagesSite\Request\Applicationjson;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Source
{
    public const SCHEMA_JSON = '{"required":["branch","path"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."}},"description":"Update the source for the repository. Must include the branch name and path."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Update the source for the repository. Must include the branch name and path.';
    public const SCHEMA_EXAMPLE_DATA = '{"branch":"generated_branch","path":"generated_path"}';
    /**
     * The repository branch used to publish your site's source files.
     */
    public ?string $branch;
    /**
     * The repository directory that includes the source files for the Pages site. Allowed paths are `/` or `/docs`.
     */
    public ?string $path;
    public function __construct(string $branch, string $path)
    {
        $this->branch = $branch;
        $this->path = $path;
    }
}

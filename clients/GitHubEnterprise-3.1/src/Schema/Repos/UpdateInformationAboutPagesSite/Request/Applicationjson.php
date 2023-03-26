<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateInformationAboutPagesSite\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["source"]},{"required":["cname"]},{"required":["public"]},{"required":["https_enforced"]}],"properties":{"cname":{"type":["string","null"],"description":"Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see \\"[Using a custom domain with GitHub Pages](https:\\/\\/docs.github.com\\/articles\\/using-a-custom-domain-with-github-pages\\/).\\""},"https_enforced":{"type":"boolean","description":"Specify whether HTTPS should be enforced for the repository."},"public":{"type":"boolean","description":"Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan."},"source":{"anyOf":[{"enum":["gh-pages","master","master \\/docs"],"type":"string","description":"Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `\\/docs`. Possible values are `\\"gh-pages\\"`, `\\"master\\"`, and `\\"master \\/docs\\"`."},{"required":["branch","path"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."}},"description":"Update the source for the repository. Must include the branch name and path."}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cname":"generated_cname_null","https_enforced":false,"public":false,"source":"generated_source_null"}';
    /**
     * cname: Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://docs.github.com/articles/using-a-custom-domain-with-github-pages/)."
     * httpsEnforced: Specify whether HTTPS should be enforced for the repository.
     * public: Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan.
     */
    public function __construct(public ?string $cname, #[\EventSauce\ObjectHydrator\MapFrom('https_enforced')] public ?bool $httpsEnforced, public ?bool $public, public ?string $source)
    {
    }
}

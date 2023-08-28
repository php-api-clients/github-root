<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateInformationAboutPagesSite\Request;

use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source;
use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "anyOf": [
        {
            "required": [
                "build_type"
            ]
        },
        {
            "required": [
                "source"
            ]
        },
        {
            "required": [
                "cname"
            ]
        },
        {
            "required": [
                "public"
            ]
        },
        {
            "required": [
                "https_enforced"
            ]
        }
    ],
    "properties": {
        "cname": {
            "type": [
                "string",
                "null"
            ],
            "description": "Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see \\"[Using a custom domain with GitHub Pages](https:\\/\\/docs.github.com\\/articles\\/using-a-custom-domain-with-github-pages\\/).\\""
        },
        "https_enforced": {
            "type": "boolean",
            "description": "Specify whether HTTPS should be enforced for the repository."
        },
        "public": {
            "type": "boolean",
            "description": "Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan."
        },
        "build_type": {
            "enum": [
                "legacy",
                "workflow"
            ],
            "type": "string",
            "description": "The process by which the GitHub Pages site will be built. `workflow` means that the site is built by a custom GitHub Actions workflow. `legacy` means that the site is built by GitHub when changes are pushed to a specific branch."
        },
        "source": {
            "anyOf": [
                {
                    "enum": [
                        "gh-pages",
                        "master",
                        "master \\/docs"
                    ],
                    "type": "string",
                    "description": "Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `\\/docs`. Possible values are `\\"gh-pages\\"`, `\\"master\\"`, and `\\"master \\/docs\\"`."
                },
                {
                    "required": [
                        "branch",
                        "path"
                    ],
                    "type": "object",
                    "properties": {
                        "branch": {
                            "type": "string",
                            "description": "The repository branch used to publish your site\'s source files."
                        },
                        "path": {
                            "enum": [
                                "\\/",
                                "\\/docs"
                            ],
                            "type": "string",
                            "description": "The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."
                        }
                    },
                    "description": "Update the source for the repository. Must include the branch name and path."
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "cname": "generated",
    "https_enforced": false,
    "public": false,
    "build_type": "workflow",
    "source": null
}';

    /**
     * cname: Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://docs.github.com/articles/using-a-custom-domain-with-github-pages/)."
     * httpsEnforced: Specify whether HTTPS should be enforced for the repository.
     * public: Configures access controls for the GitHub Pages site. If public is set to `true`, the site is accessible to anyone on the internet. If set to `false`, the site will only be accessible to users who have at least `read` access to the repository that published the site. This includes anyone in your Enterprise if the repository is set to `internal` visibility. This feature is only available to repositories in an organization on an Enterprise plan.
     * buildType: The process by which the GitHub Pages site will be built. `workflow` means that the site is built by a custom GitHub Actions workflow. `legacy` means that the site is built by GitHub when changes are pushed to a specific branch.
     */
    public function __construct(public string|null $cname, #[MapFrom('https_enforced')]
    public bool|null $httpsEnforced, public bool|null $public, #[MapFrom('build_type')]
    public string|null $buildType, #[Source]
    public string|Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source\One|null $source,)
    {
    }
}

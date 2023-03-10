<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateDeploymentStatus\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["error","failure","inactive","in_progress","queued","pending","success"],"type":"string","description":"The state of the status. Can be one of `error`, `failure`, `inactive`, `in_progress`, `queued`, `pending`, or `success`. **Note:** To use the `inactive` state, you must provide the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.0\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub."},"target_url":{"type":"string","description":"The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It\'s recommended to use the `log_url` parameter, which replaces `target_url`.","default":""},"log_url":{"type":"string","description":"The full URL of the deployment\'s output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `\\"\\"`  \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.0\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type.","default":""},"description":{"type":"string","description":"A short description of the status. The maximum description length is 140 characters.","default":""},"environment":{"enum":["production","staging","qa"],"type":"string","description":"Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`."},"environment_url":{"type":"string","description":"Sets the URL for accessing your environment. Default: `\\"\\"`  \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.0\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type.","default":""},"auto_inactive":{"type":"boolean","description":"Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status\'s deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true` \\n**Note:** This parameter requires you to use the [`application\\/vnd.github.ant-man-preview+json`](https:\\/\\/docs.github.com\\/enterprise-server@3.0\\/rest\\/overview\\/api-previews#enhanced-deployments) custom media type."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","target_url":"generated_target_url","log_url":"generated_log_url","description":"generated_description","environment":"generated_environment","environment_url":"generated_environment_url","auto_inactive":false}';
    /**
    * state: The state of the status. Can be one of `error`, `failure`, `inactive`, `in_progress`, `queued`, `pending`, or `success`. **Note:** To use the `inactive` state, you must provide the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.0/rest/overview/api-previews#enhanced-deployments) custom media type. When you set a transient deployment to `inactive`, the deployment will be shown as `destroyed` in GitHub.
    * target_url: The target URL to associate with this status. This URL should contain output to keep the user updated while the task is running or serve as historical information for what happened in the deployment. **Note:** It's recommended to use the `log_url` parameter, which replaces `target_url`.
    * log_url: The full URL of the deployment's output. This parameter replaces `target_url`. We will continue to accept `target_url` to support legacy uses, but we recommend replacing `target_url` with `log_url`. Setting `log_url` will automatically set `target_url` to the same value. Default: `""`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.0/rest/overview/api-previews#enhanced-deployments) custom media type.
    * description: A short description of the status. The maximum description length is 140 characters.
    * environment: Name for the target deployment environment, which can be changed when setting a deploy status. For example, `production`, `staging`, or `qa`.
    * environment_url: Sets the URL for accessing your environment. Default: `""`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.0/rest/overview/api-previews#enhanced-deployments) custom media type.
    * auto_inactive: Adds a new `inactive` status to all prior non-transient, non-production environment deployments with the same repository and `environment` name as the created status's deployment. An `inactive` status is only added to deployments that had a `success` state. Default: `true` 
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://docs.github.com/enterprise-server@3.0/rest/overview/api-previews#enhanced-deployments) custom media type.
    */
    public function __construct(public string $state, public ?string $target_url, public ?string $log_url, public ?string $description, public ?string $environment, public ?string $environment_url, public ?bool $auto_inactive)
    {
    }
}

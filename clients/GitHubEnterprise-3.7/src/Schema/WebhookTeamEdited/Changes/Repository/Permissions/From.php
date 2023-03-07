<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookTeamEdited\Changes\Repository\Permissions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"admin":false,"pull":false,"push":false}';
    /**
     * admin: The previous version of the team member's `admin` permission on a repository, if the action was `edited`.
     * pull: The previous version of the team member's `pull` permission on a repository, if the action was `edited`.
     * push: The previous version of the team member's `push` permission on a repository, if the action was `edited`.
     */
    public function __construct(public ?bool $admin, public ?bool $pull, public ?bool $push)
    {
    }
}

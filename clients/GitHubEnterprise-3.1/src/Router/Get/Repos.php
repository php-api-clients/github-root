<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\BranchProtection;
use ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHubEnterprise\Schema\BranchWithProtection;
use ApiClients\Client\GitHubEnterprise\Schema\CombinedCommitStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Commit;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComment;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComparison;
use ApiClients\Client\GitHubEnterprise\Schema\ContentDirectory;
use ApiClients\Client\GitHubEnterprise\Schema\ContentFile;
use ApiClients\Client\GitHubEnterprise\Schema\ContentSubmodule;
use ApiClients\Client\GitHubEnterprise\Schema\ContentSymlink;
use ApiClients\Client\GitHubEnterprise\Schema\DeployKey;
use ApiClients\Client\GitHubEnterprise\Schema\Deployment;
use ApiClients\Client\GitHubEnterprise\Schema\DeploymentStatus;
use ApiClients\Client\GitHubEnterprise\Schema\FullRepository;
use ApiClients\Client\GitHubEnterprise\Schema\Hook;
use ApiClients\Client\GitHubEnterprise\Schema\Language;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\Page;
use ApiClients\Client\GitHubEnterprise\Schema\PageBuild;
use ApiClients\Client\GitHubEnterprise\Schema\ParticipationStats;
use ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHubEnterprise\Schema\Release;
use ApiClients\Client\GitHubEnterprise\Schema\ReleaseAsset;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryCollaboratorPermission;
use ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHubEnterprise\Schema\Topic;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Repos
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\Repository> | array{code: int}) */
    public function listForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('visibility', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: visibility');
        }

        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('affiliation', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: affiliation');
        }

        $arguments['affiliation'] = $params['affiliation'];
        unset($params['affiliation']);
        if (array_key_exists('type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: type');
        }

        $arguments['type'] = $params['type'];
        unset($params['type']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Repos::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Repos::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Repos();
        }

        $operator = new Operator\Repos\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Repos::class]);

        return $operator->call($arguments['direction'], $arguments['since'], $arguments['before'], $arguments['visibility'], $arguments['affiliation'], $arguments['type'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\RepositoryInvitation> | array{code: int}) */
    public function listInvitationsForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\RepositoryInvitations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\RepositoryInvitations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations();
        }

        $operator = new Operator\Repos\ListInvitationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\RepositoryInvitations::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listForOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: type');
        }

        $arguments['type'] = $params['type'];
        unset($params['type']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Repos::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Repos::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos();
        }

        $operator = new Operator\Repos\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Repos::class]);

        return $operator->call($arguments['org'], $arguments['type'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function get(array $params): FullRepository|BasicError|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo();
        }

        $operator = new Operator\Repos\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: type');
        }

        $arguments['type'] = $params['type'];
        unset($params['type']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Repos::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Repos::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos();
        }

        $operator = new Operator\Repos\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Repos::class]);

        return $operator->call($arguments['username'], $arguments['direction'], $arguments['type'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getBranch(array $params): BranchWithProtection|BasicError|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch();
        }

        $operator = new Operator\Repos\GetBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function checkCollaborator(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\Repos\CheckCollaborator($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['username']);
    }

    /** @return */
    public function getCommitComment(array $params): CommitComment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId();
        }

        $operator = new Operator\Repos\GetCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id']);
    }

    /** @return */
    public function getCommit(array $params): Commit|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\Ref::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref();
        }

        $operator = new Operator\Repos\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function compareCommits(array $params): CommitComparison|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('basehead', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: basehead');
        }

        $arguments['basehead'] = $params['basehead'];
        unset($params['basehead']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead();
        }

        $operator = new Operator\Repos\CompareCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['basehead']);
    }

    /** @return (Schema\ContentDirectory | Schema\ContentFile | Schema\ContentSymlink | Schema\ContentSubmodule | array{code: int}) */
    public function getContent(array $params): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('path', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: path');
        }

        $arguments['path'] = $params['path'];
        unset($params['path']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Contents\Path::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contents\Path::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path();
        }

        $operator = new Operator\Repos\GetContent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contents\Path::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['path'], $arguments['ref']);
    }

    /** @return */
    public function getDeployment(array $params): Deployment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('deployment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: deployment_id');
        }

        $arguments['deployment_id'] = $params['deployment_id'];
        unset($params['deployment_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId();
        }

        $operator = new Operator\Repos\GetDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['deployment_id']);
    }

    /** @return */
    public function getWebhook(array $params): Hook|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId();
        }

        $operator = new Operator\Repos\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['hook_id']);
    }

    /** @return */
    public function getDeployKey(array $params): DeployKey|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_id');
        }

        $arguments['key_id'] = $params['key_id'];
        unset($params['key_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId();
        }

        $operator = new Operator\Repos\GetDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['key_id']);
    }

    /** @return iterable<Schema\PageBuild> */
    public function listPagesBuilds(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pages\Builds::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds();
        }

        $operator = new Operator\Repos\ListPagesBuilds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getReadmeInDirectory(array $params): ContentFile|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('dir', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: dir');
        }

        $arguments['dir'] = $params['dir'];
        unset($params['dir']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Readme\Dir::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Readme\Dir::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir();
        }

        $operator = new Operator\Repos\GetReadmeInDirectory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Readme\Dir::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['dir'], $arguments['ref']);
    }

    /** @return */
    public function getLatestRelease(array $params): Release|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\Latest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Latest::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest();
        }

        $operator = new Operator\Repos\GetLatestRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Latest::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getRelease(array $params): Release|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('release_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: release_id');
        }

        $arguments['release_id'] = $params['release_id'];
        unset($params['release_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId();
        }

        $operator = new Operator\Repos\GetRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id']);
    }

    /** @return (iterable<int> | Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted | array{code: int}) */
    public function getCodeFrequencyStats(array $params): iterable|Accepted
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency();
        }

        $operator = new Operator\Repos\GetCodeFrequencyStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (iterable<Schema\CommitActivity> | Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted | array{code: int}) */
    public function getCommitActivityStats(array $params): iterable|Accepted
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity();
        }

        $operator = new Operator\Repos\GetCommitActivityStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (iterable<Schema\ContributorActivity> | Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted | array{code: int}) */
    public function getContributorsStats(array $params): iterable|Accepted
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors();
        }

        $operator = new Operator\Repos\GetContributorsStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getParticipationStats(array $params): ParticipationStats|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Stats\Participation::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\Participation::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation();
        }

        $operator = new Operator\Repos\GetParticipationStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\Participation::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (iterable<int> | array{code: int}) */
    public function getPunchCardStats(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard();
        }

        $operator = new Operator\Repos\GetPunchCardStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return array{code: int, location: string} */
    public function downloadTarballArchive(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        $operator = new Operator\Repos\DownloadTarballArchive($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref']);
    }

    /** @return array{code: int, location: string} */
    public function downloadZipballArchive(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        $operator = new Operator\Repos\DownloadZipballArchive($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref']);
    }

    /** @return (iterable<Schema\MinimalRepository> | array{code: int}) */
    public function listPublic(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('visibility', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: visibility');
        }

        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists(Hydrator\Operation\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Repositories();
        }

        $operator = new Operator\Repos\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories::class]);

        return $operator->call($arguments['since'], $arguments['visibility']);
    }

    /** @return iterable<Schema\ShortBranch> */
    public function listBranches(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('protected', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: protected');
        }

        $arguments['protected'] = $params['protected'];
        unset($params['protected']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches();
        }

        $operator = new Operator\Repos\ListBranches($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['protected'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Collaborator> */
    public function listCollaborators(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('affiliation', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: affiliation');
        }

        $arguments['affiliation'] = $params['affiliation'];
        unset($params['affiliation']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Collaborators::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Collaborators::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators();
        }

        $operator = new Operator\Repos\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Collaborators::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['affiliation'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\CommitComment> */
    public function listCommitCommentsForRepo(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments();
        }

        $operator = new Operator\Repos\ListCommitCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Commit> */
    public function listCommits(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sha');
        }

        $arguments['sha'] = $params['sha'];
        unset($params['sha']);
        if (array_key_exists('path', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: path');
        }

        $arguments['path'] = $params['path'];
        unset($params['path']);
        if (array_key_exists('author', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: author');
        }

        $arguments['author'] = $params['author'];
        unset($params['author']);
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('until', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: until');
        }

        $arguments['until'] = $params['until'];
        unset($params['until']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits();
        }

        $operator = new Operator\Repos\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['sha'], $arguments['path'], $arguments['author'], $arguments['since'], $arguments['until'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\Contributor> | array{code: int}) */
    public function listContributors(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('anon', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: anon');
        }

        $arguments['anon'] = $params['anon'];
        unset($params['anon']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Contributors::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contributors::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors();
        }

        $operator = new Operator\Repos\ListContributors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contributors::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['anon'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Deployment> */
    public function listDeployments(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sha');
        }

        $arguments['sha'] = $params['sha'];
        unset($params['sha']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('task', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: task');
        }

        $arguments['task'] = $params['task'];
        unset($params['task']);
        if (array_key_exists('environment', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment');
        }

        $arguments['environment'] = $params['environment'];
        unset($params['environment']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Deployments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments();
        }

        $operator = new Operator\Repos\ListDeployments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['sha'], $arguments['ref'], $arguments['task'], $arguments['environment'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listForks(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Forks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Forks::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks();
        }

        $operator = new Operator\Repos\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Forks::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Hook> */
    public function listWebhooks(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks();
        }

        $operator = new Operator\Repos\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\RepositoryInvitation> */
    public function listInvitations(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Invitations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Invitations::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations();
        }

        $operator = new Operator\Repos\ListInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Invitations::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\DeployKey> */
    public function listDeployKeys(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Keys::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys();
        }

        $operator = new Operator\Repos\ListDeployKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Keys::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listLanguages(array $params): Language|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Languages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Languages::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages();
        }

        $operator = new Operator\Repos\ListLanguages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Languages::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getPages(array $params): Page|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages();
        }

        $operator = new Operator\Repos\GetPages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getReadme(array $params): ContentFile|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Readme::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Readme::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme();
        }

        $operator = new Operator\Repos\GetReadme($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Readme::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref']);
    }

    /** @return iterable<Schema\Release> */
    public function listReleases(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases();
        }

        $operator = new Operator\Repos\ListReleases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Tag> */
    public function listTags(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Tags::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Tags::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags();
        }

        $operator = new Operator\Repos\ListTags($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Tags::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Team> */
    public function listTeams(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Teams::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams();
        }

        $operator = new Operator\Repos\ListTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Teams::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAllTopics(array $params): Topic|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Topics::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Topics::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics();
        }

        $operator = new Operator\Repos\GetAllTopics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Topics::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function getBranchProtection(array $params): BranchProtection|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection();
        }

        $operator = new Operator\Repos\GetBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return */
    public function getCollaboratorPermissionLevel(array $params): RepositoryCollaboratorPermission|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission();
        }

        $operator = new Operator\Repos\GetCollaboratorPermissionLevel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['username']);
    }

    /** @return iterable<Schema\BranchShort> */
    public function listBranchesForHeadCommit(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('commit_sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: commit_sha');
        }

        $arguments['commit_sha'] = $params['commit_sha'];
        unset($params['commit_sha']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead();
        }

        $operator = new Operator\Repos\ListBranchesForHeadCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['commit_sha']);
    }

    /** @return iterable<Schema\CommitComment> */
    public function listCommentsForCommit(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('commit_sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: commit_sha');
        }

        $arguments['commit_sha'] = $params['commit_sha'];
        unset($params['commit_sha']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments();
        }

        $operator = new Operator\Repos\ListCommentsForCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['commit_sha'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\PullRequestSimple> */
    public function listPullRequestsAssociatedWithCommit(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('commit_sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: commit_sha');
        }

        $arguments['commit_sha'] = $params['commit_sha'];
        unset($params['commit_sha']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls();
        }

        $operator = new Operator\Repos\ListPullRequestsAssociatedWithCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['commit_sha'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getCombinedStatusForRef(array $params): CombinedCommitStatus|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status();
        }

        $operator = new Operator\Repos\GetCombinedStatusForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\Status> | Schema\BasicError) */
    public function listCommitStatusesForRef(array $params): iterable|BasicError
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses();
        }

        $operator = new Operator\Repos\ListCommitStatusesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\DeploymentStatus> */
    public function listDeploymentStatuses(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('deployment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: deployment_id');
        }

        $arguments['deployment_id'] = $params['deployment_id'];
        unset($params['deployment_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses();
        }

        $operator = new Operator\Repos\ListDeploymentStatuses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['deployment_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getWebhookConfigForRepo(array $params): WebhookConfig|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config();
        }

        $operator = new Operator\Repos\GetWebhookConfigForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['hook_id']);
    }

    /** @return */
    public function getLatestPagesBuild(array $params): PageBuild|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest();
        }

        $operator = new Operator\Repos\GetLatestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getPagesBuild(array $params): PageBuild|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('build_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: build_id');
        }

        $arguments['build_id'] = $params['build_id'];
        unset($params['build_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId();
        }

        $operator = new Operator\Repos\GetPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['build_id']);
    }

    /** @return (Schema\ReleaseAsset | array{code: int}) */
    public function getReleaseAsset(array $params): ReleaseAsset|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('asset_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: asset_id');
        }

        $arguments['asset_id'] = $params['asset_id'];
        unset($params['asset_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId();
        }

        $operator = new Operator\Repos\GetReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['asset_id']);
    }

    /** @return */
    public function getReleaseByTag(array $params): Release|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('tag', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tag');
        }

        $arguments['tag'] = $params['tag'];
        unset($params['tag']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag();
        }

        $operator = new Operator\Repos\GetReleaseByTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['tag']);
    }

    /** @return iterable<Schema\ReleaseAsset> */
    public function listReleaseAssets(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('release_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: release_id');
        }

        $arguments['release_id'] = $params['release_id'];
        unset($params['release_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets();
        }

        $operator = new Operator\Repos\ListReleaseAssets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAdminBranchProtection(array $params): ProtectedBranchAdminEnforced|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins();
        }

        $operator = new Operator\Repos\GetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return */
    public function getPullRequestReviewProtection(array $params): ProtectedBranchPullRequestReview|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews();
        }

        $operator = new Operator\Repos\GetPullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return */
    public function getCommitSignatureProtection(array $params): ProtectedBranchAdminEnforced|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures();
        }

        $operator = new Operator\Repos\GetCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return */
    public function getStatusChecksProtection(array $params): StatusCheckPolicy|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks();
        }

        $operator = new Operator\Repos\GetStatusChecksProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return */
    public function getAccessRestrictions(array $params): BranchRestrictionPolicy|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions();
        }

        $operator = new Operator\Repos\GetAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return */
    public function getDeploymentStatus(array $params): DeploymentStatus|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('deployment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: deployment_id');
        }

        $arguments['deployment_id'] = $params['deployment_id'];
        unset($params['deployment_id']);
        if (array_key_exists('status_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status_id');
        }

        $arguments['status_id'] = $params['status_id'];
        unset($params['status_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId();
        }

        $operator = new Operator\Repos\GetDeploymentStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['deployment_id'], $arguments['status_id']);
    }

    /** @return iterable<string> */
    public function getAllStatusCheckContexts(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts();
        }

        $operator = new Operator\Repos\GetAllStatusCheckContexts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return iterable<Schema\Integration> */
    public function getAppsWithAccessToProtectedBranch(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps();
        }

        $operator = new Operator\Repos\GetAppsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return iterable<Schema\Team> */
    public function getTeamsWithAccessToProtectedBranch(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams();
        }

        $operator = new Operator\Repos\GetTeamsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function getUsersWithAccessToProtectedBranch(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users();
        }

        $operator = new Operator\Repos\GetUsersWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return Observable<string> */
    public function downloadTarballArchiveStreaming(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        $operator = new Operator\Repos\DownloadTarballArchiveStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref']);
    }

    /** @return Observable<string> */
    public function downloadZipballArchiveStreaming(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        $operator = new Operator\Repos\DownloadZipballArchiveStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref']);
    }
}

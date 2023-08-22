<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\FileCommit;
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

    /** @return (Schema\BasicError | array{code: int}) */
    public function delete(array $params): BasicError|array
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

        $operator = new Operator\Repos\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return array{code: int} */
    public function declineInvitationForAuthenticatedUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('invitation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: invitation_id');
        }

        $arguments['invitation_id'] = $params['invitation_id'];
        unset($params['invitation_id']);
        if (array_key_exists(Hydrator\Operation\User\RepositoryInvitations\InvitationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\RepositoryInvitations\InvitationId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId();
        }

        $operator = new Operator\Repos\DeclineInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\RepositoryInvitations\InvitationId::class]);

        return $operator->call($arguments['invitation_id']);
    }

    /** @return array{code: int} */
    public function deletePagesSite(array $params): array
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

        $operator = new Operator\Repos\DeletePagesSite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return array{code: int} */
    public function deleteBranchProtection(array $params): array
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

        $operator = new Operator\Repos\DeleteBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function deleteReleaseAsset(array $params): array
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
        $operator = new Operator\Repos\DeleteReleaseAsset($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['asset_id']);
    }

    /** @return array{code: int} */
    public function removeCollaborator(array $params): array
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
        $operator = new Operator\Repos\RemoveCollaborator($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['username']);
    }

    /** @return array{code: int} */
    public function deleteCommitComment(array $params): array
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

        $operator = new Operator\Repos\DeleteCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id']);
    }

    /** @return */
    public function deleteFile(array $params): FileCommit|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Contents\Path::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contents\Path::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path();
        }

        $operator = new Operator\Repos\DeleteFile($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contents\Path::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['path'], $params);
    }

    /** @return array{code: int} */
    public function deleteDeployment(array $params): array
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

        $operator = new Operator\Repos\DeleteDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['deployment_id']);
    }

    /** @return array{code: int} */
    public function deleteAnEnvironment(array $params): array
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
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        $operator = new Operator\Repos\DeleteAnEnvironment($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['environment_name']);
    }

    /** @return array{code: int} */
    public function deleteWebhook(array $params): array
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

        $operator = new Operator\Repos\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['hook_id']);
    }

    /** @return array{code: int} */
    public function deleteInvitation(array $params): array
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
        if (array_key_exists('invitation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: invitation_id');
        }

        $arguments['invitation_id'] = $params['invitation_id'];
        unset($params['invitation_id']);
        $operator = new Operator\Repos\DeleteInvitation($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['invitation_id']);
    }

    /** @return array{code: int} */
    public function deleteDeployKey(array $params): array
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
        $operator = new Operator\Repos\DeleteDeployKey($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['key_id']);
    }

    /** @return array{code: int} */
    public function deleteRelease(array $params): array
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
        $operator = new Operator\Repos\DeleteRelease($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id']);
    }

    /** @return array{code: int} */
    public function deleteAdminBranchProtection(array $params): array
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

        $operator = new Operator\Repos\DeleteAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function deletePullRequestReviewProtection(array $params): array
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

        $operator = new Operator\Repos\DeletePullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function deleteCommitSignatureProtection(array $params): array
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

        $operator = new Operator\Repos\DeleteCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function removeStatusCheckProtection(array $params): array
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
        $operator = new Operator\Repos\RemoveStatusCheckProtection($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function deleteAccessRestrictions(array $params): array
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
        $operator = new Operator\Repos\DeleteAccessRestrictions($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch']);
    }

    /** @return array{code: int} */
    public function deleteDeploymentBranchPolicy(array $params): array
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
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        if (array_key_exists('branch_policy_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch_policy_id');
        }

        $arguments['branch_policy_id'] = $params['branch_policy_id'];
        unset($params['branch_policy_id']);
        $operator = new Operator\Repos\DeleteDeploymentBranchPolicy($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['environment_name'], $arguments['branch_policy_id']);
    }

    /** @return Observable<string> */
    public function removeStatusCheckContexts(array $params): iterable
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

        $operator = new Operator\Repos\RemoveStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch'], $params);
    }

    /** @return Observable<Schema\Integration> */
    public function removeAppAccessRestrictions(array $params): iterable
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

        $operator = new Operator\Repos\RemoveAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch'], $params);
    }

    /** @return Observable<Schema\Team> */
    public function removeTeamAccessRestrictions(array $params): iterable
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

        $operator = new Operator\Repos\RemoveTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch'], $params);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function removeUserAccessRestrictions(array $params): iterable
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

        $operator = new Operator\Repos\RemoveUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch'], $params);
    }
}

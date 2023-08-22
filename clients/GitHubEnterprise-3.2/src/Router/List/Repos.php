<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Repos
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\Repository> | array{code: int}) */
    public function listForAuthenticatedUserListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Repos::class]);
            $items    = $operator->call($arguments['direction'], $arguments['since'], $arguments['before'], $arguments['visibility'], $arguments['affiliation'], $arguments['type'], $arguments['sort'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\RepositoryInvitation> | array{code: int}) */
    public function listInvitationsForAuthenticatedUserListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListInvitationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\RepositoryInvitations::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listForOrgListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Repos::class]);
            $items    = $operator->call($arguments['org'], $arguments['type'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listForUserListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Repos::class]);
            $items    = $operator->call($arguments['username'], $arguments['direction'], $arguments['type'], $arguments['sort'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\ShortBranch> */
    public function listBranchesListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListBranchesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['protected'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Collaborator> */
    public function listCollaboratorsListing(array $params): iterable
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
        if (array_key_exists('permission', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: permission');
        }

        $arguments['permission'] = $params['permission'];
        unset($params['permission']);
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Collaborators::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['permission'], $arguments['affiliation'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\CommitComment> */
    public function listCommitCommentsForRepoListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListCommitCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Commit> */
    public function listCommitsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['sha'], $arguments['path'], $arguments['author'], $arguments['since'], $arguments['until'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\Contributor> | array{code: int}) */
    public function listContributorsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListContributorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Contributors::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['anon'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Deployment> */
    public function listDeploymentsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListDeploymentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['sha'], $arguments['ref'], $arguments['task'], $arguments['environment'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listForksListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Forks::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['sort'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Hook> */
    public function listWebhooksListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\RepositoryInvitation> */
    public function listInvitationsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Invitations::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\DeployKey> */
    public function listDeployKeysListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListDeployKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Keys::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Release> */
    public function listReleasesListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListReleasesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Tag> */
    public function listTagsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListTagsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Tags::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Team> */
    public function listTeamsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Teams::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\PageBuild> */
    public function listPagesBuildsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListPagesBuildsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pages\Builds::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\CommitComment> */
    public function listCommentsForCommitListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListCommentsForCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['commit_sha'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\PullRequestSimple> */
    public function listPullRequestsAssociatedWithCommitListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListPullRequestsAssociatedWithCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['commit_sha'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\Status> | Schema\BasicError) */
    public function listCommitStatusesForRefListing(array $params): iterable|BasicError
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListCommitStatusesForRefListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\DeploymentStatus> */
    public function listDeploymentStatusesListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListDeploymentStatusesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['deployment_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\ReleaseAsset> */
    public function listReleaseAssetsListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Repos\ListReleaseAssetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}

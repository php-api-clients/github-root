<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Users
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\Email> | array{code: int}) */
    public function listEmailsForAuthenticatedUserListing(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\User\Emails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Emails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Emails();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListEmailsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Emails::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\SimpleUser> | array{code: int}) */
    public function listFollowersForAuthenticatedUserListing(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\User\Followers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Followers::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Followers();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListFollowersForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Followers::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\SimpleUser> | array{code: int}) */
    public function listFollowedByAuthenticatedUserListing(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\User\Following::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Following::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Following();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListFollowedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Following::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\GpgKey> | array{code: int}) */
    public function listGpgKeysForAuthenticatedUserListing(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\User\GpgKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\GpgKeys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListGpgKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\GpgKeys::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\Key> | array{code: int}) */
    public function listPublicSshKeysForAuthenticatedUserListing(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\User\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Keys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Keys();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListPublicSshKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Keys::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\Email> | array{code: int}) */
    public function listPublicEmailsForAuthenticatedUserListing(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\User\PublicEmails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\PublicEmails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListPublicEmailsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\PublicEmails::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listFollowersForUserListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Followers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Followers::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListFollowersForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Followers::class]);
            $items    = $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listFollowingForUserListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Following::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Following::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListFollowingForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Following::class]);
            $items    = $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\GpgKey> */
    public function listGpgKeysForUserListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\GpgKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\GpgKeys::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListGpgKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\GpgKeys::class]);
            $items    = $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\KeySimple> */
    public function listPublicKeysForUserListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Keys::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Users\ListPublicKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Keys::class]);
            $items    = $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}

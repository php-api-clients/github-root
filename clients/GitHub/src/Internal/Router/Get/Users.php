<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Users\CheckBlocked;
use ApiClients\Client\GitHub\Internal\Operator\Users\CheckFollowingForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetAuthenticated;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetById;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetByUsername;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetContextForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetGpgKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\GetSshSigningKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\List_;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListAttestations;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListBlockedByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListEmailsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowedByAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowersForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowersForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListFollowingForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListGpgKeysForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListGpgKeysForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListPublicEmailsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListPublicKeysForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSocialAccountsForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSocialAccountsForUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\ListSshSigningKeysForUser;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Client\GitHub\Schema\Hovercard;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Client\GitHub\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Client\GitHub\Schema\PublicUser;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getAuthenticated(array $params): PrivateUser|PublicUser|WithoutBody
    {
        $operator = new GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());

        return $operator->call();
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function list(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());

        return $operator->call($arguments['since'], $arguments['per_page']);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function listBlockedByAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListBlockedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Email>|WithoutBody */
    public function listEmailsForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function listFollowersForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SimpleUser>|WithoutBody */
    public function listFollowedByAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<GpgKey>|WithoutBody */
    public function listGpgKeysForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Key>|WithoutBody */
    public function listPublicSshKeysForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Email>|WithoutBody */
    public function listPublicEmailsForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListPublicEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SocialAccount>|WithoutBody */
    public function listSocialAccountsForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListSocialAccountsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SshSigningKey>|WithoutBody */
    public function listSshSigningKeysForAuthenticatedUser(array $params): iterable|WithoutBody
    {
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
        $operator = new ListSshSigningKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getById(array $params): PrivateUser|PublicUser
    {
        $arguments = [];
        if (array_key_exists('account_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: account_id');
        }

        $arguments['account_id'] = $params['account_id'];
        unset($params['account_id']);
        $operator = new GetById($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀AccountId());

        return $operator->call($arguments['account_id']);
    }

    /** @return */
    public function getByUsername(array $params): PrivateUser|PublicUser
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function checkBlocked(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new CheckBlocked($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function checkPersonIsFollowedByAuthenticated(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getGpgKeyForAuthenticatedUser(array $params): GpgKey|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('gpg_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gpg_key_id');
        }

        $arguments['gpg_key_id'] = $params['gpg_key_id'];
        unset($params['gpg_key_id']);
        $operator = new GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());

        return $operator->call($arguments['gpg_key_id']);
    }

    /** @return */
    public function getPublicSshKeyForAuthenticatedUser(array $params): Key|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_id');
        }

        $arguments['key_id'] = $params['key_id'];
        unset($params['key_id']);
        $operator = new GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());

        return $operator->call($arguments['key_id']);
    }

    /** @return */
    public function getSshSigningKeyForAuthenticatedUser(array $params): SshSigningKey|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('ssh_signing_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ssh_signing_key_id');
        }

        $arguments['ssh_signing_key_id'] = $params['ssh_signing_key_id'];
        unset($params['ssh_signing_key_id']);
        $operator = new GetSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());

        return $operator->call($arguments['ssh_signing_key_id']);
    }

    /** @return Observable<SimpleUser> */
    public function listFollowersForUser(array $params): iterable
    {
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
        $operator = new ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SimpleUser> */
    public function listFollowingForUser(array $params): iterable
    {
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
        $operator = new ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<GpgKey> */
    public function listGpgKeysForUser(array $params): iterable
    {
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
        $operator = new ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getContextForUser(array $params): Hovercard
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('subject_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_type');
        }

        $arguments['subject_type'] = $params['subject_type'];
        unset($params['subject_type']);
        if (array_key_exists('subject_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_id');
        }

        $arguments['subject_id'] = $params['subject_id'];
        unset($params['subject_id']);
        $operator = new GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());

        return $operator->call($arguments['username'], $arguments['subject_type'], $arguments['subject_id']);
    }

    /** @return Observable<KeySimple> */
    public function listPublicKeysForUser(array $params): iterable
    {
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
        $operator = new ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SocialAccount> */
    public function listSocialAccountsForUser(array $params): iterable
    {
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
        $operator = new ListSocialAccountsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<SshSigningKey> */
    public function listSshSigningKeysForUser(array $params): iterable
    {
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
        $operator = new ListSshSigningKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listAttestations(array $params): Ok|EmptyObject|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('subject_digest', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_digest');
        }

        $arguments['subject_digest'] = $params['subject_digest'];
        unset($params['subject_digest']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new ListAttestations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Attestations🌀SubjectDigest());

        return $operator->call($arguments['before'], $arguments['after'], $arguments['username'], $arguments['subject_digest'], $arguments['per_page']);
    }

    /** @return */
    public function checkFollowingForUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('target_user', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: target_user');
        }

        $arguments['target_user'] = $params['target_user'];
        unset($params['target_user']);
        $operator = new CheckFollowingForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['target_user']);
    }
}

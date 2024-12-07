<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteEmailForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteSocialAccountForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\DeleteSshSigningKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\Unblock;
use ApiClients\Client\GitHub\Internal\Operator\Users\Unfollow;
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
    public function unblock(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Unblock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function unfollow(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function deleteGpgKeyForAuthenticatedUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('gpg_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gpg_key_id');
        }

        $arguments['gpg_key_id'] = $params['gpg_key_id'];
        unset($params['gpg_key_id']);
        $operator = new DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());

        return $operator->call($arguments['gpg_key_id']);
    }

    /** @return */
    public function deletePublicSshKeyForAuthenticatedUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_id');
        }

        $arguments['key_id'] = $params['key_id'];
        unset($params['key_id']);
        $operator = new DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());

        return $operator->call($arguments['key_id']);
    }

    /** @return */
    public function deleteSshSigningKeyForAuthenticatedUser(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('ssh_signing_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ssh_signing_key_id');
        }

        $arguments['ssh_signing_key_id'] = $params['ssh_signing_key_id'];
        unset($params['ssh_signing_key_id']);
        $operator = new DeleteSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());

        return $operator->call($arguments['ssh_signing_key_id']);
    }

    /** @return */
    public function deleteEmailForAuthenticatedUser(array $params): WithoutBody
    {
        $operator = new DeleteEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());

        return $operator->call($params);
    }

    /** @return */
    public function deleteSocialAccountForAuthenticatedUser(array $params): WithoutBody
    {
        $operator = new DeleteSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());

        return $operator->call($params);
    }
}

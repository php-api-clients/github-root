<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Scim
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listProvisionedIdentities(string $org, int $startIndex, int $count, string $filter): Schema\ScimUserList
    {
        if (array_key_exists(Operator\Scim\ListProvisionedIdentities::class, $this->operator) === false) {
            $this->operator[Operator\Scim\ListProvisionedIdentities::class] = new Operator\Scim\ListProvisionedIdentities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users());
        }

        return $this->operator[Operator\Scim\ListProvisionedIdentities::class]->call($org, $startIndex, $count, $filter);
    }

    public function provisionAndInviteUser(string $org, array $params): Schema\ScimUser
    {
        if (array_key_exists(Operator\Scim\ProvisionAndInviteUser::class, $this->operator) === false) {
            $this->operator[Operator\Scim\ProvisionAndInviteUser::class] = new Operator\Scim\ProvisionAndInviteUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users());
        }

        return $this->operator[Operator\Scim\ProvisionAndInviteUser::class]->call($org, $params);
    }

    public function getProvisioningInformationForUser(string $org, string $scimUserId): Schema\ScimUser
    {
        if (array_key_exists(Operator\Scim\GetProvisioningInformationForUser::class, $this->operator) === false) {
            $this->operator[Operator\Scim\GetProvisioningInformationForUser::class] = new Operator\Scim\GetProvisioningInformationForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users🌀ScimUserId());
        }

        return $this->operator[Operator\Scim\GetProvisioningInformationForUser::class]->call($org, $scimUserId);
    }

    public function setInformationForProvisionedUser(string $org, string $scimUserId, array $params): Schema\ScimUser
    {
        if (array_key_exists(Operator\Scim\SetInformationForProvisionedUser::class, $this->operator) === false) {
            $this->operator[Operator\Scim\SetInformationForProvisionedUser::class] = new Operator\Scim\SetInformationForProvisionedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users🌀ScimUserId());
        }

        return $this->operator[Operator\Scim\SetInformationForProvisionedUser::class]->call($org, $scimUserId, $params);
    }

    public function deleteUserFromOrg(string $org, string $scimUserId): ResponseInterface
    {
        if (array_key_exists(Operator\Scim\DeleteUserFromOrg::class, $this->operator) === false) {
            $this->operator[Operator\Scim\DeleteUserFromOrg::class] = new Operator\Scim\DeleteUserFromOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users🌀ScimUserId());
        }

        return $this->operator[Operator\Scim\DeleteUserFromOrg::class]->call($org, $scimUserId);
    }

    public function updateAttributeForUser(string $org, string $scimUserId, array $params): Schema\ScimUser
    {
        if (array_key_exists(Operator\Scim\UpdateAttributeForUser::class, $this->operator) === false) {
            $this->operator[Operator\Scim\UpdateAttributeForUser::class] = new Operator\Scim\UpdateAttributeForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users🌀ScimUserId());
        }

        return $this->operator[Operator\Scim\UpdateAttributeForUser::class]->call($org, $scimUserId, $params);
    }
}

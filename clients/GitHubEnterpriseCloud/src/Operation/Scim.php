<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList;

final class Scim
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\ScimUserList|array{code:int} */
    public function listProvisionedIdentities(string $org, int $startIndex, int $count, string $filter): ScimUserList|array
    {
        return $this->operators->scim👷ListProvisionedIdentities()->call($org, $startIndex, $count, $filter);
    }

    /** @return Schema\ScimUser|array{code:int} */
    public function provisionAndInviteUser(string $org, array $params): ScimUser|array
    {
        return $this->operators->scim👷ProvisionAndInviteUser()->call($org, $params);
    }

    /** @return Schema\ScimUser|array{code:int} */
    public function getProvisioningInformationForUser(string $org, string $scimUserId): ScimUser|array
    {
        return $this->operators->scim👷GetProvisioningInformationForUser()->call($org, $scimUserId);
    }

    /** @return Schema\ScimUser|array{code:int} */
    public function setInformationForProvisionedUser(string $org, string $scimUserId, array $params): ScimUser|array
    {
        return $this->operators->scim👷SetInformationForProvisionedUser()->call($org, $scimUserId, $params);
    }

    /** @return array{code:int} */
    public function deleteUserFromOrg(string $org, string $scimUserId): array
    {
        return $this->operators->scim👷DeleteUserFromOrg()->call($org, $scimUserId);
    }

    /** @return Schema\ScimUser|array{code:int} */
    public function updateAttributeForUser(string $org, string $scimUserId, array $params): ScimUser|array
    {
        return $this->operators->scim👷UpdateAttributeForUser()->call($org, $scimUserId, $params);
    }
}

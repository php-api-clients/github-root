<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSub;

final class Oidc
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\OidcCustomSub */
    public function getOidcCustomSubTemplateForOrg(string $org): OidcCustomSub|array
    {
        return $this->operators->oidc👷GetOidcCustomSubTemplateForOrg()->call($org);
    }

    /** @return Schema\EmptyObject */
    public function updateOidcCustomSubTemplateForOrg(string $org, array $params): EmptyObject|array
    {
        return $this->operators->oidc👷UpdateOidcCustomSubTemplateForOrg()->call($org, $params);
    }
}

<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Operators;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSub;

final class Oidc
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return */
    public function getOidcCustomSubTemplateForOrg(string $org): OidcCustomSub|array
    {
        return $this->operators->oidc👷GetOidcCustomSubTemplateForOrg()->call($org);
    }

    /** @return */
    public function updateOidcCustomSubTemplateForOrg(string $org, array $params): EmptyObject|array
    {
        return $this->operators->oidc👷UpdateOidcCustomSubTemplateForOrg()->call($org, $params);
    }
}

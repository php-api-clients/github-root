<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Routers
{
    private Internal\Router\Get\Meta|null $internal🔀Router🔀Get🔀Meta                                     = null;
    private Internal\Router\Get\SecurityAdvisories|null $internal🔀Router🔀Get🔀SecurityAdvisories         = null;
    private Internal\Router\Get\Apps|null $internal🔀Router🔀Get🔀Apps                                     = null;
    private Internal\Router\Get\Classroom|null $internal🔀Router🔀Get🔀Classroom                           = null;
    private Internal\Router\Get\CodesOfConduct|null $internal🔀Router🔀Get🔀CodesOfConduct                 = null;
    private Internal\Router\Get\Emojis|null $internal🔀Router🔀Get🔀Emojis                                 = null;
    private Internal\Router\Get\Activity|null $internal🔀Router🔀Get🔀Activity                             = null;
    private Internal\Router\Get\Gists|null $internal🔀Router🔀Get🔀Gists                                   = null;
    private Internal\Router\Get\Issues|null $internal🔀Router🔀Get🔀Issues                                 = null;
    private Internal\Router\Get\Licenses|null $internal🔀Router🔀Get🔀Licenses                             = null;
    private Internal\Router\Get\Orgs|null $internal🔀Router🔀Get🔀Orgs                                     = null;
    private Internal\Router\Get\RateLimit|null $internal🔀Router🔀Get🔀RateLimit                           = null;
    private Internal\Router\Get\Repos|null $internal🔀Router🔀Get🔀Repos                                   = null;
    private Internal\Router\Get\Users|null $internal🔀Router🔀Get🔀Users                                   = null;
    private Internal\Router\Get\Gitignore|null $internal🔀Router🔀Get🔀Gitignore                           = null;
    private Internal\Router\Get\Projects|null $internal🔀Router🔀Get🔀Projects                             = null;
    private Internal\Router\Get\Search|null $internal🔀Router🔀Get🔀Search                                 = null;
    private Internal\Router\Get\Teams|null $internal🔀Router🔀Get🔀Teams                                   = null;
    private Internal\Router\Get\Codespaces|null $internal🔀Router🔀Get🔀Codespaces                         = null;
    private Internal\Router\Get\Interactions|null $internal🔀Router🔀Get🔀Interactions                     = null;
    private Internal\Router\Get\Migrations|null $internal🔀Router🔀Get🔀Migrations                         = null;
    private Internal\Router\Get\Packages|null $internal🔀Router🔀Get🔀Packages                             = null;
    private Internal\Router\Get\EnterpriseAdmin|null $internal🔀Router🔀Get🔀EnterpriseAdmin               = null;
    private Internal\Router\Get\AnnouncementBanners|null $internal🔀Router🔀Get🔀AnnouncementBanners       = null;
    private Internal\Router\Get\SecretScanning|null $internal🔀Router🔀Get🔀SecretScanning                 = null;
    private Internal\Router\Get\CodeScanning|null $internal🔀Router🔀Get🔀CodeScanning                     = null;
    private Internal\Router\Get\Copilot|null $internal🔀Router🔀Get🔀Copilot                               = null;
    private Internal\Router\Get\Dependabot|null $internal🔀Router🔀Get🔀Dependabot                         = null;
    private Internal\Router\Get\Actions|null $internal🔀Router🔀Get🔀Actions                               = null;
    private Internal\Router\Get\CodeSecurity|null $internal🔀Router🔀Get🔀CodeSecurity                     = null;
    private Internal\Router\Get\Pulls|null $internal🔀Router🔀Get🔀Pulls                                   = null;
    private Internal\Router\Get\Billing|null $internal🔀Router🔀Get🔀Billing                               = null;
    private Internal\Router\Get\ApiInsights|null $internal🔀Router🔀Get🔀ApiInsights                       = null;
    private Internal\Router\Get\Checks|null $internal🔀Router🔀Get🔀Checks                                 = null;
    private Internal\Router\Get\DependencyGraph|null $internal🔀Router🔀Get🔀DependencyGraph               = null;
    private Internal\Router\Get\Scim|null $internal🔀Router🔀Get🔀Scim                                     = null;
    private Internal\Router\Get\Reactions|null $internal🔀Router🔀Get🔀Reactions                           = null;
    private Internal\Router\Get\Oidc|null $internal🔀Router🔀Get🔀Oidc                                     = null;
    private Internal\Router\Get\Git|null $internal🔀Router🔀Get🔀Git                                       = null;
    private Internal\Router\Post\Apps|null $internal🔀Router🔀Post🔀Apps                                   = null;
    private Internal\Router\Post\Repos|null $internal🔀Router🔀Post🔀Repos                                 = null;
    private Internal\Router\Post\Gists|null $internal🔀Router🔀Post🔀Gists                                 = null;
    private Internal\Router\Post\Orgs|null $internal🔀Router🔀Post🔀Orgs                                   = null;
    private Internal\Router\Post\Migrations|null $internal🔀Router🔀Post🔀Migrations                       = null;
    private Internal\Router\Post\Projects|null $internal🔀Router🔀Post🔀Projects                           = null;
    private Internal\Router\Post\Teams|null $internal🔀Router🔀Post🔀Teams                                 = null;
    private Internal\Router\Post\Actions|null $internal🔀Router🔀Post🔀Actions                             = null;
    private Internal\Router\Post\EnterpriseAdmin|null $internal🔀Router🔀Post🔀EnterpriseAdmin             = null;
    private Internal\Router\Post\Codespaces|null $internal🔀Router🔀Post🔀Codespaces                       = null;
    private Internal\Router\Post\Copilot|null $internal🔀Router🔀Post🔀Copilot                             = null;
    private Internal\Router\Post\CodeScanning|null $internal🔀Router🔀Post🔀CodeScanning                   = null;
    private Internal\Router\Post\DependencyGraph|null $internal🔀Router🔀Post🔀DependencyGraph             = null;
    private Internal\Router\Post\Git|null $internal🔀Router🔀Post🔀Git                                     = null;
    private Internal\Router\Post\SecretScanning|null $internal🔀Router🔀Post🔀SecretScanning               = null;
    private Internal\Router\Post\SecurityAdvisories|null $internal🔀Router🔀Post🔀SecurityAdvisories       = null;
    private Internal\Router\Post\Scim|null $internal🔀Router🔀Post🔀Scim                                   = null;
    private Internal\Router\Post\Reactions|null $internal🔀Router🔀Post🔀Reactions                         = null;
    private Internal\Router\Post\Packages|null $internal🔀Router🔀Post🔀Packages                           = null;
    private Internal\Router\Post\CodeSecurity|null $internal🔀Router🔀Post🔀CodeSecurity                   = null;
    private Internal\Router\Post\Checks|null $internal🔀Router🔀Post🔀Checks                               = null;
    private Internal\Router\Post\Issues|null $internal🔀Router🔀Post🔀Issues                               = null;
    private Internal\Router\Post\Pulls|null $internal🔀Router🔀Post🔀Pulls                                 = null;
    private Internal\Router\Post\Billing|null $internal🔀Router🔀Post🔀Billing                             = null;
    private Internal\Router\Post\Markdown|null $internal🔀Router🔀Post🔀Markdown                           = null;
    private Internal\Router\Post\Users|null $internal🔀Router🔀Post🔀Users                                 = null;
    private Internal\Router\Patch\Apps|null $internal🔀Router🔀Patch🔀Apps                                 = null;
    private Internal\Router\Patch\AnnouncementBanners|null $internal🔀Router🔀Patch🔀AnnouncementBanners   = null;
    private Internal\Router\Patch\SecretScanning|null $internal🔀Router🔀Patch🔀SecretScanning             = null;
    private Internal\Router\Patch\Activity|null $internal🔀Router🔀Patch🔀Activity                         = null;
    private Internal\Router\Patch\Projects|null $internal🔀Router🔀Patch🔀Projects                         = null;
    private Internal\Router\Patch\Repos|null $internal🔀Router🔀Patch🔀Repos                               = null;
    private Internal\Router\Patch\Codespaces|null $internal🔀Router🔀Patch🔀Codespaces                     = null;
    private Internal\Router\Patch\Users|null $internal🔀Router🔀Patch🔀Users                               = null;
    private Internal\Router\Patch\EnterpriseAdmin|null $internal🔀Router🔀Patch🔀EnterpriseAdmin           = null;
    private Internal\Router\Patch\Actions|null $internal🔀Router🔀Patch🔀Actions                           = null;
    private Internal\Router\Patch\CodeSecurity|null $internal🔀Router🔀Patch🔀CodeSecurity                 = null;
    private Internal\Router\Patch\Orgs|null $internal🔀Router🔀Patch🔀Orgs                                 = null;
    private Internal\Router\Patch\Teams|null $internal🔀Router🔀Patch🔀Teams                               = null;
    private Internal\Router\Patch\Checks|null $internal🔀Router🔀Patch🔀Checks                             = null;
    private Internal\Router\Patch\CodeScanning|null $internal🔀Router🔀Patch🔀CodeScanning                 = null;
    private Internal\Router\Patch\Migrations|null $internal🔀Router🔀Patch🔀Migrations                     = null;
    private Internal\Router\Patch\Issues|null $internal🔀Router🔀Patch🔀Issues                             = null;
    private Internal\Router\Patch\Pulls|null $internal🔀Router🔀Patch🔀Pulls                               = null;
    private Internal\Router\Patch\SecurityAdvisories|null $internal🔀Router🔀Patch🔀SecurityAdvisories     = null;
    private Internal\Router\Patch\Gists|null $internal🔀Router🔀Patch🔀Gists                               = null;
    private Internal\Router\Patch\Dependabot|null $internal🔀Router🔀Patch🔀Dependabot                     = null;
    private Internal\Router\Patch\Git|null $internal🔀Router🔀Patch🔀Git                                   = null;
    private Internal\Router\Patch\Scim|null $internal🔀Router🔀Patch🔀Scim                                 = null;
    private Internal\Router\List\Apps|null $internal🔀Router🔀List🔀Apps                                   = null;
    private Internal\Router\List\Gists|null $internal🔀Router🔀List🔀Gists                                 = null;
    private Internal\Router\List\Users|null $internal🔀Router🔀List🔀Users                                 = null;
    private Internal\Router\List\Issues|null $internal🔀Router🔀List🔀Issues                               = null;
    private Internal\Router\List\Migrations|null $internal🔀Router🔀List🔀Migrations                       = null;
    private Internal\Router\List\Orgs|null $internal🔀Router🔀List🔀Orgs                                   = null;
    private Internal\Router\List\Packages|null $internal🔀Router🔀List🔀Packages                           = null;
    private Internal\Router\List\Repos|null $internal🔀Router🔀List🔀Repos                                 = null;
    private Internal\Router\List\Activity|null $internal🔀Router🔀List🔀Activity                           = null;
    private Internal\Router\List\Teams|null $internal🔀Router🔀List🔀Teams                                 = null;
    private Internal\Router\List\Classroom|null $internal🔀Router🔀List🔀Classroom                         = null;
    private Internal\Router\List\EnterpriseAdmin|null $internal🔀Router🔀List🔀EnterpriseAdmin             = null;
    private Internal\Router\List\Projects|null $internal🔀Router🔀List🔀Projects                           = null;
    private Internal\Router\List\Licenses|null $internal🔀Router🔀List🔀Licenses                           = null;
    private Internal\Router\List\CodeScanning|null $internal🔀Router🔀List🔀CodeScanning                   = null;
    private Internal\Router\List\Copilot|null $internal🔀Router🔀List🔀Copilot                             = null;
    private Internal\Router\List\SecretScanning|null $internal🔀Router🔀List🔀SecretScanning               = null;
    private Internal\Router\List\Pulls|null $internal🔀Router🔀List🔀Pulls                                 = null;
    private Internal\Router\List\ApiInsights|null $internal🔀Router🔀List🔀ApiInsights                     = null;
    private Internal\Router\List\Checks|null $internal🔀Router🔀List🔀Checks                               = null;
    private Internal\Router\List\Reactions|null $internal🔀Router🔀List🔀Reactions                         = null;
    private Internal\Router\List\Dependabot|null $internal🔀Router🔀List🔀Dependabot                       = null;
    private Internal\Router\Delete\Apps|null $internal🔀Router🔀Delete🔀Apps                               = null;
    private Internal\Router\Delete\AnnouncementBanners|null $internal🔀Router🔀Delete🔀AnnouncementBanners = null;
    private Internal\Router\Delete\Gists|null $internal🔀Router🔀Delete🔀Gists                             = null;
    private Internal\Router\Delete\Activity|null $internal🔀Router🔀Delete🔀Activity                       = null;
    private Internal\Router\Delete\Interactions|null $internal🔀Router🔀Delete🔀Interactions               = null;
    private Internal\Router\Delete\Projects|null $internal🔀Router🔀Delete🔀Projects                       = null;
    private Internal\Router\Delete\Repos|null $internal🔀Router🔀Delete🔀Repos                             = null;
    private Internal\Router\Delete\Users|null $internal🔀Router🔀Delete🔀Users                             = null;
    private Internal\Router\Delete\Codespaces|null $internal🔀Router🔀Delete🔀Codespaces                   = null;
    private Internal\Router\Delete\Orgs|null $internal🔀Router🔀Delete🔀Orgs                               = null;
    private Internal\Router\Delete\Teams|null $internal🔀Router🔀Delete🔀Teams                             = null;
    private Internal\Router\Delete\Migrations|null $internal🔀Router🔀Delete🔀Migrations                   = null;
    private Internal\Router\Delete\Packages|null $internal🔀Router🔀Delete🔀Packages                       = null;
    private Internal\Router\Delete\EnterpriseAdmin|null $internal🔀Router🔀Delete🔀EnterpriseAdmin         = null;
    private Internal\Router\Delete\Actions|null $internal🔀Router🔀Delete🔀Actions                         = null;
    private Internal\Router\Delete\CodeScanning|null $internal🔀Router🔀Delete🔀CodeScanning               = null;
    private Internal\Router\Delete\Dependabot|null $internal🔀Router🔀Delete🔀Dependabot                   = null;
    private Internal\Router\Delete\Git|null $internal🔀Router🔀Delete🔀Git                                 = null;
    private Internal\Router\Delete\Issues|null $internal🔀Router🔀Delete🔀Issues                           = null;
    private Internal\Router\Delete\Pulls|null $internal🔀Router🔀Delete🔀Pulls                             = null;
    private Internal\Router\Delete\Scim|null $internal🔀Router🔀Delete🔀Scim                               = null;
    private Internal\Router\Delete\CodeSecurity|null $internal🔀Router🔀Delete🔀CodeSecurity               = null;
    private Internal\Router\Delete\Copilot|null $internal🔀Router🔀Delete🔀Copilot                         = null;
    private Internal\Router\Delete\Billing|null $internal🔀Router🔀Delete🔀Billing                         = null;
    private Internal\Router\Delete\Reactions|null $internal🔀Router🔀Delete🔀Reactions                     = null;
    private Internal\Router\Put\Apps|null $internal🔀Router🔀Put🔀Apps                                     = null;
    private Internal\Router\Put\EnterpriseAdmin|null $internal🔀Router🔀Put🔀EnterpriseAdmin               = null;
    private Internal\Router\Put\Repos|null $internal🔀Router🔀Put🔀Repos                                   = null;
    private Internal\Router\Put\Activity|null $internal🔀Router🔀Put🔀Activity                             = null;
    private Internal\Router\Put\Actions|null $internal🔀Router🔀Put🔀Actions                               = null;
    private Internal\Router\Put\Orgs|null $internal🔀Router🔀Put🔀Orgs                                     = null;
    private Internal\Router\Put\Codespaces|null $internal🔀Router🔀Put🔀Codespaces                         = null;
    private Internal\Router\Put\Projects|null $internal🔀Router🔀Put🔀Projects                             = null;
    private Internal\Router\Put\Migrations|null $internal🔀Router🔀Put🔀Migrations                         = null;
    private Internal\Router\Put\Interactions|null $internal🔀Router🔀Put🔀Interactions                     = null;
    private Internal\Router\Put\Teams|null $internal🔀Router🔀Put🔀Teams                                   = null;
    private Internal\Router\Put\Oidc|null $internal🔀Router🔀Put🔀Oidc                                     = null;
    private Internal\Router\Put\CodeSecurity|null $internal🔀Router🔀Put🔀CodeSecurity                     = null;
    private Internal\Router\Put\Dependabot|null $internal🔀Router🔀Put🔀Dependabot                         = null;
    private Internal\Router\Put\Issues|null $internal🔀Router🔀Put🔀Issues                                 = null;
    private Internal\Router\Put\Pulls|null $internal🔀Router🔀Put🔀Pulls                                   = null;
    private Internal\Router\Put\Scim|null $internal🔀Router🔀Put🔀Scim                                     = null;
    private Internal\Router\Put\Gists|null $internal🔀Router🔀Put🔀Gists                                   = null;
    private Internal\Router\Put\Users|null $internal🔀Router🔀Put🔀Users                                   = null;
    private Internal\Router\Stream\Migrations|null $internal🔀Router🔀Stream🔀Migrations                   = null;
    private Internal\Router\Stream\Repos|null $internal🔀Router🔀Stream🔀Repos                             = null;
    private Internal\Router\Stream\Actions|null $internal🔀Router🔀Stream🔀Actions                         = null;

    public function __construct(private AuthenticationInterface $authentication, private Browser $browser, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators)
    {
    }

    public function internal🔀Router🔀Get🔀Meta(): Internal\Router\Get\Meta
    {
        if ($this->internal🔀Router🔀Get🔀Meta instanceof Internal\Router\Get\Meta === false) {
            $this->internal🔀Router🔀Get🔀Meta = new Internal\Router\Get\Meta(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Meta;
    }

    public function internal🔀Router🔀Get🔀SecurityAdvisories(): Internal\Router\Get\SecurityAdvisories
    {
        if ($this->internal🔀Router🔀Get🔀SecurityAdvisories instanceof Internal\Router\Get\SecurityAdvisories === false) {
            $this->internal🔀Router🔀Get🔀SecurityAdvisories = new Internal\Router\Get\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀SecurityAdvisories;
    }

    public function internal🔀Router🔀Get🔀Apps(): Internal\Router\Get\Apps
    {
        if ($this->internal🔀Router🔀Get🔀Apps instanceof Internal\Router\Get\Apps === false) {
            $this->internal🔀Router🔀Get🔀Apps = new Internal\Router\Get\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Apps;
    }

    public function internal🔀Router🔀Get🔀Classroom(): Internal\Router\Get\Classroom
    {
        if ($this->internal🔀Router🔀Get🔀Classroom instanceof Internal\Router\Get\Classroom === false) {
            $this->internal🔀Router🔀Get🔀Classroom = new Internal\Router\Get\Classroom(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Classroom;
    }

    public function internal🔀Router🔀Get🔀CodesOfConduct(): Internal\Router\Get\CodesOfConduct
    {
        if ($this->internal🔀Router🔀Get🔀CodesOfConduct instanceof Internal\Router\Get\CodesOfConduct === false) {
            $this->internal🔀Router🔀Get🔀CodesOfConduct = new Internal\Router\Get\CodesOfConduct(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀CodesOfConduct;
    }

    public function internal🔀Router🔀Get🔀Emojis(): Internal\Router\Get\Emojis
    {
        if ($this->internal🔀Router🔀Get🔀Emojis instanceof Internal\Router\Get\Emojis === false) {
            $this->internal🔀Router🔀Get🔀Emojis = new Internal\Router\Get\Emojis(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Emojis;
    }

    public function internal🔀Router🔀Get🔀Activity(): Internal\Router\Get\Activity
    {
        if ($this->internal🔀Router🔀Get🔀Activity instanceof Internal\Router\Get\Activity === false) {
            $this->internal🔀Router🔀Get🔀Activity = new Internal\Router\Get\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Activity;
    }

    public function internal🔀Router🔀Get🔀Gists(): Internal\Router\Get\Gists
    {
        if ($this->internal🔀Router🔀Get🔀Gists instanceof Internal\Router\Get\Gists === false) {
            $this->internal🔀Router🔀Get🔀Gists = new Internal\Router\Get\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Gists;
    }

    public function internal🔀Router🔀Get🔀Issues(): Internal\Router\Get\Issues
    {
        if ($this->internal🔀Router🔀Get🔀Issues instanceof Internal\Router\Get\Issues === false) {
            $this->internal🔀Router🔀Get🔀Issues = new Internal\Router\Get\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Issues;
    }

    public function internal🔀Router🔀Get🔀Licenses(): Internal\Router\Get\Licenses
    {
        if ($this->internal🔀Router🔀Get🔀Licenses instanceof Internal\Router\Get\Licenses === false) {
            $this->internal🔀Router🔀Get🔀Licenses = new Internal\Router\Get\Licenses(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Licenses;
    }

    public function internal🔀Router🔀Get🔀Orgs(): Internal\Router\Get\Orgs
    {
        if ($this->internal🔀Router🔀Get🔀Orgs instanceof Internal\Router\Get\Orgs === false) {
            $this->internal🔀Router🔀Get🔀Orgs = new Internal\Router\Get\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Orgs;
    }

    public function internal🔀Router🔀Get🔀RateLimit(): Internal\Router\Get\RateLimit
    {
        if ($this->internal🔀Router🔀Get🔀RateLimit instanceof Internal\Router\Get\RateLimit === false) {
            $this->internal🔀Router🔀Get🔀RateLimit = new Internal\Router\Get\RateLimit(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀RateLimit;
    }

    public function internal🔀Router🔀Get🔀Repos(): Internal\Router\Get\Repos
    {
        if ($this->internal🔀Router🔀Get🔀Repos instanceof Internal\Router\Get\Repos === false) {
            $this->internal🔀Router🔀Get🔀Repos = new Internal\Router\Get\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Repos;
    }

    public function internal🔀Router🔀Get🔀Users(): Internal\Router\Get\Users
    {
        if ($this->internal🔀Router🔀Get🔀Users instanceof Internal\Router\Get\Users === false) {
            $this->internal🔀Router🔀Get🔀Users = new Internal\Router\Get\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Users;
    }

    public function internal🔀Router🔀Get🔀Gitignore(): Internal\Router\Get\Gitignore
    {
        if ($this->internal🔀Router🔀Get🔀Gitignore instanceof Internal\Router\Get\Gitignore === false) {
            $this->internal🔀Router🔀Get🔀Gitignore = new Internal\Router\Get\Gitignore(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Gitignore;
    }

    public function internal🔀Router🔀Get🔀Projects(): Internal\Router\Get\Projects
    {
        if ($this->internal🔀Router🔀Get🔀Projects instanceof Internal\Router\Get\Projects === false) {
            $this->internal🔀Router🔀Get🔀Projects = new Internal\Router\Get\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Projects;
    }

    public function internal🔀Router🔀Get🔀Search(): Internal\Router\Get\Search
    {
        if ($this->internal🔀Router🔀Get🔀Search instanceof Internal\Router\Get\Search === false) {
            $this->internal🔀Router🔀Get🔀Search = new Internal\Router\Get\Search(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Search;
    }

    public function internal🔀Router🔀Get🔀Teams(): Internal\Router\Get\Teams
    {
        if ($this->internal🔀Router🔀Get🔀Teams instanceof Internal\Router\Get\Teams === false) {
            $this->internal🔀Router🔀Get🔀Teams = new Internal\Router\Get\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Teams;
    }

    public function internal🔀Router🔀Get🔀Codespaces(): Internal\Router\Get\Codespaces
    {
        if ($this->internal🔀Router🔀Get🔀Codespaces instanceof Internal\Router\Get\Codespaces === false) {
            $this->internal🔀Router🔀Get🔀Codespaces = new Internal\Router\Get\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Codespaces;
    }

    public function internal🔀Router🔀Get🔀Interactions(): Internal\Router\Get\Interactions
    {
        if ($this->internal🔀Router🔀Get🔀Interactions instanceof Internal\Router\Get\Interactions === false) {
            $this->internal🔀Router🔀Get🔀Interactions = new Internal\Router\Get\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Interactions;
    }

    public function internal🔀Router🔀Get🔀Migrations(): Internal\Router\Get\Migrations
    {
        if ($this->internal🔀Router🔀Get🔀Migrations instanceof Internal\Router\Get\Migrations === false) {
            $this->internal🔀Router🔀Get🔀Migrations = new Internal\Router\Get\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Migrations;
    }

    public function internal🔀Router🔀Get🔀Packages(): Internal\Router\Get\Packages
    {
        if ($this->internal🔀Router🔀Get🔀Packages instanceof Internal\Router\Get\Packages === false) {
            $this->internal🔀Router🔀Get🔀Packages = new Internal\Router\Get\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Packages;
    }

    public function internal🔀Router🔀Get🔀EnterpriseAdmin(): Internal\Router\Get\EnterpriseAdmin
    {
        if ($this->internal🔀Router🔀Get🔀EnterpriseAdmin instanceof Internal\Router\Get\EnterpriseAdmin === false) {
            $this->internal🔀Router🔀Get🔀EnterpriseAdmin = new Internal\Router\Get\EnterpriseAdmin(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀EnterpriseAdmin;
    }

    public function internal🔀Router🔀Get🔀AnnouncementBanners(): Internal\Router\Get\AnnouncementBanners
    {
        if ($this->internal🔀Router🔀Get🔀AnnouncementBanners instanceof Internal\Router\Get\AnnouncementBanners === false) {
            $this->internal🔀Router🔀Get🔀AnnouncementBanners = new Internal\Router\Get\AnnouncementBanners(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀AnnouncementBanners;
    }

    public function internal🔀Router🔀Get🔀SecretScanning(): Internal\Router\Get\SecretScanning
    {
        if ($this->internal🔀Router🔀Get🔀SecretScanning instanceof Internal\Router\Get\SecretScanning === false) {
            $this->internal🔀Router🔀Get🔀SecretScanning = new Internal\Router\Get\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀SecretScanning;
    }

    public function internal🔀Router🔀Get🔀CodeScanning(): Internal\Router\Get\CodeScanning
    {
        if ($this->internal🔀Router🔀Get🔀CodeScanning instanceof Internal\Router\Get\CodeScanning === false) {
            $this->internal🔀Router🔀Get🔀CodeScanning = new Internal\Router\Get\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀CodeScanning;
    }

    public function internal🔀Router🔀Get🔀Copilot(): Internal\Router\Get\Copilot
    {
        if ($this->internal🔀Router🔀Get🔀Copilot instanceof Internal\Router\Get\Copilot === false) {
            $this->internal🔀Router🔀Get🔀Copilot = new Internal\Router\Get\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Copilot;
    }

    public function internal🔀Router🔀Get🔀Dependabot(): Internal\Router\Get\Dependabot
    {
        if ($this->internal🔀Router🔀Get🔀Dependabot instanceof Internal\Router\Get\Dependabot === false) {
            $this->internal🔀Router🔀Get🔀Dependabot = new Internal\Router\Get\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Dependabot;
    }

    public function internal🔀Router🔀Get🔀Actions(): Internal\Router\Get\Actions
    {
        if ($this->internal🔀Router🔀Get🔀Actions instanceof Internal\Router\Get\Actions === false) {
            $this->internal🔀Router🔀Get🔀Actions = new Internal\Router\Get\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Actions;
    }

    public function internal🔀Router🔀Get🔀CodeSecurity(): Internal\Router\Get\CodeSecurity
    {
        if ($this->internal🔀Router🔀Get🔀CodeSecurity instanceof Internal\Router\Get\CodeSecurity === false) {
            $this->internal🔀Router🔀Get🔀CodeSecurity = new Internal\Router\Get\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀CodeSecurity;
    }

    public function internal🔀Router🔀Get🔀Pulls(): Internal\Router\Get\Pulls
    {
        if ($this->internal🔀Router🔀Get🔀Pulls instanceof Internal\Router\Get\Pulls === false) {
            $this->internal🔀Router🔀Get🔀Pulls = new Internal\Router\Get\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Pulls;
    }

    public function internal🔀Router🔀Get🔀Billing(): Internal\Router\Get\Billing
    {
        if ($this->internal🔀Router🔀Get🔀Billing instanceof Internal\Router\Get\Billing === false) {
            $this->internal🔀Router🔀Get🔀Billing = new Internal\Router\Get\Billing(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Billing;
    }

    public function internal🔀Router🔀Get🔀ApiInsights(): Internal\Router\Get\ApiInsights
    {
        if ($this->internal🔀Router🔀Get🔀ApiInsights instanceof Internal\Router\Get\ApiInsights === false) {
            $this->internal🔀Router🔀Get🔀ApiInsights = new Internal\Router\Get\ApiInsights(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀ApiInsights;
    }

    public function internal🔀Router🔀Get🔀Checks(): Internal\Router\Get\Checks
    {
        if ($this->internal🔀Router🔀Get🔀Checks instanceof Internal\Router\Get\Checks === false) {
            $this->internal🔀Router🔀Get🔀Checks = new Internal\Router\Get\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Checks;
    }

    public function internal🔀Router🔀Get🔀DependencyGraph(): Internal\Router\Get\DependencyGraph
    {
        if ($this->internal🔀Router🔀Get🔀DependencyGraph instanceof Internal\Router\Get\DependencyGraph === false) {
            $this->internal🔀Router🔀Get🔀DependencyGraph = new Internal\Router\Get\DependencyGraph(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀DependencyGraph;
    }

    public function internal🔀Router🔀Get🔀Scim(): Internal\Router\Get\Scim
    {
        if ($this->internal🔀Router🔀Get🔀Scim instanceof Internal\Router\Get\Scim === false) {
            $this->internal🔀Router🔀Get🔀Scim = new Internal\Router\Get\Scim(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Scim;
    }

    public function internal🔀Router🔀Get🔀Reactions(): Internal\Router\Get\Reactions
    {
        if ($this->internal🔀Router🔀Get🔀Reactions instanceof Internal\Router\Get\Reactions === false) {
            $this->internal🔀Router🔀Get🔀Reactions = new Internal\Router\Get\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Reactions;
    }

    public function internal🔀Router🔀Get🔀Oidc(): Internal\Router\Get\Oidc
    {
        if ($this->internal🔀Router🔀Get🔀Oidc instanceof Internal\Router\Get\Oidc === false) {
            $this->internal🔀Router🔀Get🔀Oidc = new Internal\Router\Get\Oidc(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Oidc;
    }

    public function internal🔀Router🔀Get🔀Git(): Internal\Router\Get\Git
    {
        if ($this->internal🔀Router🔀Get🔀Git instanceof Internal\Router\Get\Git === false) {
            $this->internal🔀Router🔀Get🔀Git = new Internal\Router\Get\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Get🔀Git;
    }

    public function internal🔀Router🔀Post🔀Apps(): Internal\Router\Post\Apps
    {
        if ($this->internal🔀Router🔀Post🔀Apps instanceof Internal\Router\Post\Apps === false) {
            $this->internal🔀Router🔀Post🔀Apps = new Internal\Router\Post\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Apps;
    }

    public function internal🔀Router🔀Post🔀Repos(): Internal\Router\Post\Repos
    {
        if ($this->internal🔀Router🔀Post🔀Repos instanceof Internal\Router\Post\Repos === false) {
            $this->internal🔀Router🔀Post🔀Repos = new Internal\Router\Post\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Repos;
    }

    public function internal🔀Router🔀Post🔀Gists(): Internal\Router\Post\Gists
    {
        if ($this->internal🔀Router🔀Post🔀Gists instanceof Internal\Router\Post\Gists === false) {
            $this->internal🔀Router🔀Post🔀Gists = new Internal\Router\Post\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Gists;
    }

    public function internal🔀Router🔀Post🔀Orgs(): Internal\Router\Post\Orgs
    {
        if ($this->internal🔀Router🔀Post🔀Orgs instanceof Internal\Router\Post\Orgs === false) {
            $this->internal🔀Router🔀Post🔀Orgs = new Internal\Router\Post\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Orgs;
    }

    public function internal🔀Router🔀Post🔀Migrations(): Internal\Router\Post\Migrations
    {
        if ($this->internal🔀Router🔀Post🔀Migrations instanceof Internal\Router\Post\Migrations === false) {
            $this->internal🔀Router🔀Post🔀Migrations = new Internal\Router\Post\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Migrations;
    }

    public function internal🔀Router🔀Post🔀Projects(): Internal\Router\Post\Projects
    {
        if ($this->internal🔀Router🔀Post🔀Projects instanceof Internal\Router\Post\Projects === false) {
            $this->internal🔀Router🔀Post🔀Projects = new Internal\Router\Post\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Projects;
    }

    public function internal🔀Router🔀Post🔀Teams(): Internal\Router\Post\Teams
    {
        if ($this->internal🔀Router🔀Post🔀Teams instanceof Internal\Router\Post\Teams === false) {
            $this->internal🔀Router🔀Post🔀Teams = new Internal\Router\Post\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Teams;
    }

    public function internal🔀Router🔀Post🔀Actions(): Internal\Router\Post\Actions
    {
        if ($this->internal🔀Router🔀Post🔀Actions instanceof Internal\Router\Post\Actions === false) {
            $this->internal🔀Router🔀Post🔀Actions = new Internal\Router\Post\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Actions;
    }

    public function internal🔀Router🔀Post🔀EnterpriseAdmin(): Internal\Router\Post\EnterpriseAdmin
    {
        if ($this->internal🔀Router🔀Post🔀EnterpriseAdmin instanceof Internal\Router\Post\EnterpriseAdmin === false) {
            $this->internal🔀Router🔀Post🔀EnterpriseAdmin = new Internal\Router\Post\EnterpriseAdmin(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀EnterpriseAdmin;
    }

    public function internal🔀Router🔀Post🔀Codespaces(): Internal\Router\Post\Codespaces
    {
        if ($this->internal🔀Router🔀Post🔀Codespaces instanceof Internal\Router\Post\Codespaces === false) {
            $this->internal🔀Router🔀Post🔀Codespaces = new Internal\Router\Post\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Codespaces;
    }

    public function internal🔀Router🔀Post🔀Copilot(): Internal\Router\Post\Copilot
    {
        if ($this->internal🔀Router🔀Post🔀Copilot instanceof Internal\Router\Post\Copilot === false) {
            $this->internal🔀Router🔀Post🔀Copilot = new Internal\Router\Post\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Copilot;
    }

    public function internal🔀Router🔀Post🔀CodeScanning(): Internal\Router\Post\CodeScanning
    {
        if ($this->internal🔀Router🔀Post🔀CodeScanning instanceof Internal\Router\Post\CodeScanning === false) {
            $this->internal🔀Router🔀Post🔀CodeScanning = new Internal\Router\Post\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀CodeScanning;
    }

    public function internal🔀Router🔀Post🔀DependencyGraph(): Internal\Router\Post\DependencyGraph
    {
        if ($this->internal🔀Router🔀Post🔀DependencyGraph instanceof Internal\Router\Post\DependencyGraph === false) {
            $this->internal🔀Router🔀Post🔀DependencyGraph = new Internal\Router\Post\DependencyGraph(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀DependencyGraph;
    }

    public function internal🔀Router🔀Post🔀Git(): Internal\Router\Post\Git
    {
        if ($this->internal🔀Router🔀Post🔀Git instanceof Internal\Router\Post\Git === false) {
            $this->internal🔀Router🔀Post🔀Git = new Internal\Router\Post\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Git;
    }

    public function internal🔀Router🔀Post🔀SecretScanning(): Internal\Router\Post\SecretScanning
    {
        if ($this->internal🔀Router🔀Post🔀SecretScanning instanceof Internal\Router\Post\SecretScanning === false) {
            $this->internal🔀Router🔀Post🔀SecretScanning = new Internal\Router\Post\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀SecretScanning;
    }

    public function internal🔀Router🔀Post🔀SecurityAdvisories(): Internal\Router\Post\SecurityAdvisories
    {
        if ($this->internal🔀Router🔀Post🔀SecurityAdvisories instanceof Internal\Router\Post\SecurityAdvisories === false) {
            $this->internal🔀Router🔀Post🔀SecurityAdvisories = new Internal\Router\Post\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀SecurityAdvisories;
    }

    public function internal🔀Router🔀Post🔀Scim(): Internal\Router\Post\Scim
    {
        if ($this->internal🔀Router🔀Post🔀Scim instanceof Internal\Router\Post\Scim === false) {
            $this->internal🔀Router🔀Post🔀Scim = new Internal\Router\Post\Scim(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Scim;
    }

    public function internal🔀Router🔀Post🔀Reactions(): Internal\Router\Post\Reactions
    {
        if ($this->internal🔀Router🔀Post🔀Reactions instanceof Internal\Router\Post\Reactions === false) {
            $this->internal🔀Router🔀Post🔀Reactions = new Internal\Router\Post\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Reactions;
    }

    public function internal🔀Router🔀Post🔀Packages(): Internal\Router\Post\Packages
    {
        if ($this->internal🔀Router🔀Post🔀Packages instanceof Internal\Router\Post\Packages === false) {
            $this->internal🔀Router🔀Post🔀Packages = new Internal\Router\Post\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Packages;
    }

    public function internal🔀Router🔀Post🔀CodeSecurity(): Internal\Router\Post\CodeSecurity
    {
        if ($this->internal🔀Router🔀Post🔀CodeSecurity instanceof Internal\Router\Post\CodeSecurity === false) {
            $this->internal🔀Router🔀Post🔀CodeSecurity = new Internal\Router\Post\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀CodeSecurity;
    }

    public function internal🔀Router🔀Post🔀Checks(): Internal\Router\Post\Checks
    {
        if ($this->internal🔀Router🔀Post🔀Checks instanceof Internal\Router\Post\Checks === false) {
            $this->internal🔀Router🔀Post🔀Checks = new Internal\Router\Post\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Checks;
    }

    public function internal🔀Router🔀Post🔀Issues(): Internal\Router\Post\Issues
    {
        if ($this->internal🔀Router🔀Post🔀Issues instanceof Internal\Router\Post\Issues === false) {
            $this->internal🔀Router🔀Post🔀Issues = new Internal\Router\Post\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Issues;
    }

    public function internal🔀Router🔀Post🔀Pulls(): Internal\Router\Post\Pulls
    {
        if ($this->internal🔀Router🔀Post🔀Pulls instanceof Internal\Router\Post\Pulls === false) {
            $this->internal🔀Router🔀Post🔀Pulls = new Internal\Router\Post\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Pulls;
    }

    public function internal🔀Router🔀Post🔀Billing(): Internal\Router\Post\Billing
    {
        if ($this->internal🔀Router🔀Post🔀Billing instanceof Internal\Router\Post\Billing === false) {
            $this->internal🔀Router🔀Post🔀Billing = new Internal\Router\Post\Billing(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Billing;
    }

    public function internal🔀Router🔀Post🔀Markdown(): Internal\Router\Post\Markdown
    {
        if ($this->internal🔀Router🔀Post🔀Markdown instanceof Internal\Router\Post\Markdown === false) {
            $this->internal🔀Router🔀Post🔀Markdown = new Internal\Router\Post\Markdown(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Markdown;
    }

    public function internal🔀Router🔀Post🔀Users(): Internal\Router\Post\Users
    {
        if ($this->internal🔀Router🔀Post🔀Users instanceof Internal\Router\Post\Users === false) {
            $this->internal🔀Router🔀Post🔀Users = new Internal\Router\Post\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Post🔀Users;
    }

    public function internal🔀Router🔀Patch🔀Apps(): Internal\Router\Patch\Apps
    {
        if ($this->internal🔀Router🔀Patch🔀Apps instanceof Internal\Router\Patch\Apps === false) {
            $this->internal🔀Router🔀Patch🔀Apps = new Internal\Router\Patch\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Apps;
    }

    public function internal🔀Router🔀Patch🔀AnnouncementBanners(): Internal\Router\Patch\AnnouncementBanners
    {
        if ($this->internal🔀Router🔀Patch🔀AnnouncementBanners instanceof Internal\Router\Patch\AnnouncementBanners === false) {
            $this->internal🔀Router🔀Patch🔀AnnouncementBanners = new Internal\Router\Patch\AnnouncementBanners(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀AnnouncementBanners;
    }

    public function internal🔀Router🔀Patch🔀SecretScanning(): Internal\Router\Patch\SecretScanning
    {
        if ($this->internal🔀Router🔀Patch🔀SecretScanning instanceof Internal\Router\Patch\SecretScanning === false) {
            $this->internal🔀Router🔀Patch🔀SecretScanning = new Internal\Router\Patch\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀SecretScanning;
    }

    public function internal🔀Router🔀Patch🔀Activity(): Internal\Router\Patch\Activity
    {
        if ($this->internal🔀Router🔀Patch🔀Activity instanceof Internal\Router\Patch\Activity === false) {
            $this->internal🔀Router🔀Patch🔀Activity = new Internal\Router\Patch\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Activity;
    }

    public function internal🔀Router🔀Patch🔀Projects(): Internal\Router\Patch\Projects
    {
        if ($this->internal🔀Router🔀Patch🔀Projects instanceof Internal\Router\Patch\Projects === false) {
            $this->internal🔀Router🔀Patch🔀Projects = new Internal\Router\Patch\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Projects;
    }

    public function internal🔀Router🔀Patch🔀Repos(): Internal\Router\Patch\Repos
    {
        if ($this->internal🔀Router🔀Patch🔀Repos instanceof Internal\Router\Patch\Repos === false) {
            $this->internal🔀Router🔀Patch🔀Repos = new Internal\Router\Patch\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Repos;
    }

    public function internal🔀Router🔀Patch🔀Codespaces(): Internal\Router\Patch\Codespaces
    {
        if ($this->internal🔀Router🔀Patch🔀Codespaces instanceof Internal\Router\Patch\Codespaces === false) {
            $this->internal🔀Router🔀Patch🔀Codespaces = new Internal\Router\Patch\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Codespaces;
    }

    public function internal🔀Router🔀Patch🔀Users(): Internal\Router\Patch\Users
    {
        if ($this->internal🔀Router🔀Patch🔀Users instanceof Internal\Router\Patch\Users === false) {
            $this->internal🔀Router🔀Patch🔀Users = new Internal\Router\Patch\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Users;
    }

    public function internal🔀Router🔀Patch🔀EnterpriseAdmin(): Internal\Router\Patch\EnterpriseAdmin
    {
        if ($this->internal🔀Router🔀Patch🔀EnterpriseAdmin instanceof Internal\Router\Patch\EnterpriseAdmin === false) {
            $this->internal🔀Router🔀Patch🔀EnterpriseAdmin = new Internal\Router\Patch\EnterpriseAdmin(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀EnterpriseAdmin;
    }

    public function internal🔀Router🔀Patch🔀Actions(): Internal\Router\Patch\Actions
    {
        if ($this->internal🔀Router🔀Patch🔀Actions instanceof Internal\Router\Patch\Actions === false) {
            $this->internal🔀Router🔀Patch🔀Actions = new Internal\Router\Patch\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Actions;
    }

    public function internal🔀Router🔀Patch🔀CodeSecurity(): Internal\Router\Patch\CodeSecurity
    {
        if ($this->internal🔀Router🔀Patch🔀CodeSecurity instanceof Internal\Router\Patch\CodeSecurity === false) {
            $this->internal🔀Router🔀Patch🔀CodeSecurity = new Internal\Router\Patch\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀CodeSecurity;
    }

    public function internal🔀Router🔀Patch🔀Orgs(): Internal\Router\Patch\Orgs
    {
        if ($this->internal🔀Router🔀Patch🔀Orgs instanceof Internal\Router\Patch\Orgs === false) {
            $this->internal🔀Router🔀Patch🔀Orgs = new Internal\Router\Patch\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Orgs;
    }

    public function internal🔀Router🔀Patch🔀Teams(): Internal\Router\Patch\Teams
    {
        if ($this->internal🔀Router🔀Patch🔀Teams instanceof Internal\Router\Patch\Teams === false) {
            $this->internal🔀Router🔀Patch🔀Teams = new Internal\Router\Patch\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Teams;
    }

    public function internal🔀Router🔀Patch🔀Checks(): Internal\Router\Patch\Checks
    {
        if ($this->internal🔀Router🔀Patch🔀Checks instanceof Internal\Router\Patch\Checks === false) {
            $this->internal🔀Router🔀Patch🔀Checks = new Internal\Router\Patch\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Checks;
    }

    public function internal🔀Router🔀Patch🔀CodeScanning(): Internal\Router\Patch\CodeScanning
    {
        if ($this->internal🔀Router🔀Patch🔀CodeScanning instanceof Internal\Router\Patch\CodeScanning === false) {
            $this->internal🔀Router🔀Patch🔀CodeScanning = new Internal\Router\Patch\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀CodeScanning;
    }

    public function internal🔀Router🔀Patch🔀Migrations(): Internal\Router\Patch\Migrations
    {
        if ($this->internal🔀Router🔀Patch🔀Migrations instanceof Internal\Router\Patch\Migrations === false) {
            $this->internal🔀Router🔀Patch🔀Migrations = new Internal\Router\Patch\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Migrations;
    }

    public function internal🔀Router🔀Patch🔀Issues(): Internal\Router\Patch\Issues
    {
        if ($this->internal🔀Router🔀Patch🔀Issues instanceof Internal\Router\Patch\Issues === false) {
            $this->internal🔀Router🔀Patch🔀Issues = new Internal\Router\Patch\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Issues;
    }

    public function internal🔀Router🔀Patch🔀Pulls(): Internal\Router\Patch\Pulls
    {
        if ($this->internal🔀Router🔀Patch🔀Pulls instanceof Internal\Router\Patch\Pulls === false) {
            $this->internal🔀Router🔀Patch🔀Pulls = new Internal\Router\Patch\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Pulls;
    }

    public function internal🔀Router🔀Patch🔀SecurityAdvisories(): Internal\Router\Patch\SecurityAdvisories
    {
        if ($this->internal🔀Router🔀Patch🔀SecurityAdvisories instanceof Internal\Router\Patch\SecurityAdvisories === false) {
            $this->internal🔀Router🔀Patch🔀SecurityAdvisories = new Internal\Router\Patch\SecurityAdvisories(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀SecurityAdvisories;
    }

    public function internal🔀Router🔀Patch🔀Gists(): Internal\Router\Patch\Gists
    {
        if ($this->internal🔀Router🔀Patch🔀Gists instanceof Internal\Router\Patch\Gists === false) {
            $this->internal🔀Router🔀Patch🔀Gists = new Internal\Router\Patch\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Gists;
    }

    public function internal🔀Router🔀Patch🔀Dependabot(): Internal\Router\Patch\Dependabot
    {
        if ($this->internal🔀Router🔀Patch🔀Dependabot instanceof Internal\Router\Patch\Dependabot === false) {
            $this->internal🔀Router🔀Patch🔀Dependabot = new Internal\Router\Patch\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Dependabot;
    }

    public function internal🔀Router🔀Patch🔀Git(): Internal\Router\Patch\Git
    {
        if ($this->internal🔀Router🔀Patch🔀Git instanceof Internal\Router\Patch\Git === false) {
            $this->internal🔀Router🔀Patch🔀Git = new Internal\Router\Patch\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Git;
    }

    public function internal🔀Router🔀Patch🔀Scim(): Internal\Router\Patch\Scim
    {
        if ($this->internal🔀Router🔀Patch🔀Scim instanceof Internal\Router\Patch\Scim === false) {
            $this->internal🔀Router🔀Patch🔀Scim = new Internal\Router\Patch\Scim(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Patch🔀Scim;
    }

    public function internal🔀Router🔀List🔀Apps(): Internal\Router\List\Apps
    {
        if ($this->internal🔀Router🔀List🔀Apps instanceof Internal\Router\List\Apps === false) {
            $this->internal🔀Router🔀List🔀Apps = new Internal\Router\List\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Apps;
    }

    public function internal🔀Router🔀List🔀Gists(): Internal\Router\List\Gists
    {
        if ($this->internal🔀Router🔀List🔀Gists instanceof Internal\Router\List\Gists === false) {
            $this->internal🔀Router🔀List🔀Gists = new Internal\Router\List\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Gists;
    }

    public function internal🔀Router🔀List🔀Users(): Internal\Router\List\Users
    {
        if ($this->internal🔀Router🔀List🔀Users instanceof Internal\Router\List\Users === false) {
            $this->internal🔀Router🔀List🔀Users = new Internal\Router\List\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Users;
    }

    public function internal🔀Router🔀List🔀Issues(): Internal\Router\List\Issues
    {
        if ($this->internal🔀Router🔀List🔀Issues instanceof Internal\Router\List\Issues === false) {
            $this->internal🔀Router🔀List🔀Issues = new Internal\Router\List\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Issues;
    }

    public function internal🔀Router🔀List🔀Migrations(): Internal\Router\List\Migrations
    {
        if ($this->internal🔀Router🔀List🔀Migrations instanceof Internal\Router\List\Migrations === false) {
            $this->internal🔀Router🔀List🔀Migrations = new Internal\Router\List\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Migrations;
    }

    public function internal🔀Router🔀List🔀Orgs(): Internal\Router\List\Orgs
    {
        if ($this->internal🔀Router🔀List🔀Orgs instanceof Internal\Router\List\Orgs === false) {
            $this->internal🔀Router🔀List🔀Orgs = new Internal\Router\List\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Orgs;
    }

    public function internal🔀Router🔀List🔀Packages(): Internal\Router\List\Packages
    {
        if ($this->internal🔀Router🔀List🔀Packages instanceof Internal\Router\List\Packages === false) {
            $this->internal🔀Router🔀List🔀Packages = new Internal\Router\List\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Packages;
    }

    public function internal🔀Router🔀List🔀Repos(): Internal\Router\List\Repos
    {
        if ($this->internal🔀Router🔀List🔀Repos instanceof Internal\Router\List\Repos === false) {
            $this->internal🔀Router🔀List🔀Repos = new Internal\Router\List\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Repos;
    }

    public function internal🔀Router🔀List🔀Activity(): Internal\Router\List\Activity
    {
        if ($this->internal🔀Router🔀List🔀Activity instanceof Internal\Router\List\Activity === false) {
            $this->internal🔀Router🔀List🔀Activity = new Internal\Router\List\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Activity;
    }

    public function internal🔀Router🔀List🔀Teams(): Internal\Router\List\Teams
    {
        if ($this->internal🔀Router🔀List🔀Teams instanceof Internal\Router\List\Teams === false) {
            $this->internal🔀Router🔀List🔀Teams = new Internal\Router\List\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Teams;
    }

    public function internal🔀Router🔀List🔀Classroom(): Internal\Router\List\Classroom
    {
        if ($this->internal🔀Router🔀List🔀Classroom instanceof Internal\Router\List\Classroom === false) {
            $this->internal🔀Router🔀List🔀Classroom = new Internal\Router\List\Classroom(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Classroom;
    }

    public function internal🔀Router🔀List🔀EnterpriseAdmin(): Internal\Router\List\EnterpriseAdmin
    {
        if ($this->internal🔀Router🔀List🔀EnterpriseAdmin instanceof Internal\Router\List\EnterpriseAdmin === false) {
            $this->internal🔀Router🔀List🔀EnterpriseAdmin = new Internal\Router\List\EnterpriseAdmin(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀EnterpriseAdmin;
    }

    public function internal🔀Router🔀List🔀Projects(): Internal\Router\List\Projects
    {
        if ($this->internal🔀Router🔀List🔀Projects instanceof Internal\Router\List\Projects === false) {
            $this->internal🔀Router🔀List🔀Projects = new Internal\Router\List\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Projects;
    }

    public function internal🔀Router🔀List🔀Licenses(): Internal\Router\List\Licenses
    {
        if ($this->internal🔀Router🔀List🔀Licenses instanceof Internal\Router\List\Licenses === false) {
            $this->internal🔀Router🔀List🔀Licenses = new Internal\Router\List\Licenses(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Licenses;
    }

    public function internal🔀Router🔀List🔀CodeScanning(): Internal\Router\List\CodeScanning
    {
        if ($this->internal🔀Router🔀List🔀CodeScanning instanceof Internal\Router\List\CodeScanning === false) {
            $this->internal🔀Router🔀List🔀CodeScanning = new Internal\Router\List\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀CodeScanning;
    }

    public function internal🔀Router🔀List🔀Copilot(): Internal\Router\List\Copilot
    {
        if ($this->internal🔀Router🔀List🔀Copilot instanceof Internal\Router\List\Copilot === false) {
            $this->internal🔀Router🔀List🔀Copilot = new Internal\Router\List\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Copilot;
    }

    public function internal🔀Router🔀List🔀SecretScanning(): Internal\Router\List\SecretScanning
    {
        if ($this->internal🔀Router🔀List🔀SecretScanning instanceof Internal\Router\List\SecretScanning === false) {
            $this->internal🔀Router🔀List🔀SecretScanning = new Internal\Router\List\SecretScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀SecretScanning;
    }

    public function internal🔀Router🔀List🔀Pulls(): Internal\Router\List\Pulls
    {
        if ($this->internal🔀Router🔀List🔀Pulls instanceof Internal\Router\List\Pulls === false) {
            $this->internal🔀Router🔀List🔀Pulls = new Internal\Router\List\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Pulls;
    }

    public function internal🔀Router🔀List🔀ApiInsights(): Internal\Router\List\ApiInsights
    {
        if ($this->internal🔀Router🔀List🔀ApiInsights instanceof Internal\Router\List\ApiInsights === false) {
            $this->internal🔀Router🔀List🔀ApiInsights = new Internal\Router\List\ApiInsights(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀ApiInsights;
    }

    public function internal🔀Router🔀List🔀Checks(): Internal\Router\List\Checks
    {
        if ($this->internal🔀Router🔀List🔀Checks instanceof Internal\Router\List\Checks === false) {
            $this->internal🔀Router🔀List🔀Checks = new Internal\Router\List\Checks(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Checks;
    }

    public function internal🔀Router🔀List🔀Reactions(): Internal\Router\List\Reactions
    {
        if ($this->internal🔀Router🔀List🔀Reactions instanceof Internal\Router\List\Reactions === false) {
            $this->internal🔀Router🔀List🔀Reactions = new Internal\Router\List\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Reactions;
    }

    public function internal🔀Router🔀List🔀Dependabot(): Internal\Router\List\Dependabot
    {
        if ($this->internal🔀Router🔀List🔀Dependabot instanceof Internal\Router\List\Dependabot === false) {
            $this->internal🔀Router🔀List🔀Dependabot = new Internal\Router\List\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀List🔀Dependabot;
    }

    public function internal🔀Router🔀Delete🔀Apps(): Internal\Router\Delete\Apps
    {
        if ($this->internal🔀Router🔀Delete🔀Apps instanceof Internal\Router\Delete\Apps === false) {
            $this->internal🔀Router🔀Delete🔀Apps = new Internal\Router\Delete\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Apps;
    }

    public function internal🔀Router🔀Delete🔀AnnouncementBanners(): Internal\Router\Delete\AnnouncementBanners
    {
        if ($this->internal🔀Router🔀Delete🔀AnnouncementBanners instanceof Internal\Router\Delete\AnnouncementBanners === false) {
            $this->internal🔀Router🔀Delete🔀AnnouncementBanners = new Internal\Router\Delete\AnnouncementBanners(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀AnnouncementBanners;
    }

    public function internal🔀Router🔀Delete🔀Gists(): Internal\Router\Delete\Gists
    {
        if ($this->internal🔀Router🔀Delete🔀Gists instanceof Internal\Router\Delete\Gists === false) {
            $this->internal🔀Router🔀Delete🔀Gists = new Internal\Router\Delete\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Gists;
    }

    public function internal🔀Router🔀Delete🔀Activity(): Internal\Router\Delete\Activity
    {
        if ($this->internal🔀Router🔀Delete🔀Activity instanceof Internal\Router\Delete\Activity === false) {
            $this->internal🔀Router🔀Delete🔀Activity = new Internal\Router\Delete\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Activity;
    }

    public function internal🔀Router🔀Delete🔀Interactions(): Internal\Router\Delete\Interactions
    {
        if ($this->internal🔀Router🔀Delete🔀Interactions instanceof Internal\Router\Delete\Interactions === false) {
            $this->internal🔀Router🔀Delete🔀Interactions = new Internal\Router\Delete\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Interactions;
    }

    public function internal🔀Router🔀Delete🔀Projects(): Internal\Router\Delete\Projects
    {
        if ($this->internal🔀Router🔀Delete🔀Projects instanceof Internal\Router\Delete\Projects === false) {
            $this->internal🔀Router🔀Delete🔀Projects = new Internal\Router\Delete\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Projects;
    }

    public function internal🔀Router🔀Delete🔀Repos(): Internal\Router\Delete\Repos
    {
        if ($this->internal🔀Router🔀Delete🔀Repos instanceof Internal\Router\Delete\Repos === false) {
            $this->internal🔀Router🔀Delete🔀Repos = new Internal\Router\Delete\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Repos;
    }

    public function internal🔀Router🔀Delete🔀Users(): Internal\Router\Delete\Users
    {
        if ($this->internal🔀Router🔀Delete🔀Users instanceof Internal\Router\Delete\Users === false) {
            $this->internal🔀Router🔀Delete🔀Users = new Internal\Router\Delete\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Users;
    }

    public function internal🔀Router🔀Delete🔀Codespaces(): Internal\Router\Delete\Codespaces
    {
        if ($this->internal🔀Router🔀Delete🔀Codespaces instanceof Internal\Router\Delete\Codespaces === false) {
            $this->internal🔀Router🔀Delete🔀Codespaces = new Internal\Router\Delete\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Codespaces;
    }

    public function internal🔀Router🔀Delete🔀Orgs(): Internal\Router\Delete\Orgs
    {
        if ($this->internal🔀Router🔀Delete🔀Orgs instanceof Internal\Router\Delete\Orgs === false) {
            $this->internal🔀Router🔀Delete🔀Orgs = new Internal\Router\Delete\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Orgs;
    }

    public function internal🔀Router🔀Delete🔀Teams(): Internal\Router\Delete\Teams
    {
        if ($this->internal🔀Router🔀Delete🔀Teams instanceof Internal\Router\Delete\Teams === false) {
            $this->internal🔀Router🔀Delete🔀Teams = new Internal\Router\Delete\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Teams;
    }

    public function internal🔀Router🔀Delete🔀Migrations(): Internal\Router\Delete\Migrations
    {
        if ($this->internal🔀Router🔀Delete🔀Migrations instanceof Internal\Router\Delete\Migrations === false) {
            $this->internal🔀Router🔀Delete🔀Migrations = new Internal\Router\Delete\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Migrations;
    }

    public function internal🔀Router🔀Delete🔀Packages(): Internal\Router\Delete\Packages
    {
        if ($this->internal🔀Router🔀Delete🔀Packages instanceof Internal\Router\Delete\Packages === false) {
            $this->internal🔀Router🔀Delete🔀Packages = new Internal\Router\Delete\Packages(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Packages;
    }

    public function internal🔀Router🔀Delete🔀EnterpriseAdmin(): Internal\Router\Delete\EnterpriseAdmin
    {
        if ($this->internal🔀Router🔀Delete🔀EnterpriseAdmin instanceof Internal\Router\Delete\EnterpriseAdmin === false) {
            $this->internal🔀Router🔀Delete🔀EnterpriseAdmin = new Internal\Router\Delete\EnterpriseAdmin(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀EnterpriseAdmin;
    }

    public function internal🔀Router🔀Delete🔀Actions(): Internal\Router\Delete\Actions
    {
        if ($this->internal🔀Router🔀Delete🔀Actions instanceof Internal\Router\Delete\Actions === false) {
            $this->internal🔀Router🔀Delete🔀Actions = new Internal\Router\Delete\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Actions;
    }

    public function internal🔀Router🔀Delete🔀CodeScanning(): Internal\Router\Delete\CodeScanning
    {
        if ($this->internal🔀Router🔀Delete🔀CodeScanning instanceof Internal\Router\Delete\CodeScanning === false) {
            $this->internal🔀Router🔀Delete🔀CodeScanning = new Internal\Router\Delete\CodeScanning(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀CodeScanning;
    }

    public function internal🔀Router🔀Delete🔀Dependabot(): Internal\Router\Delete\Dependabot
    {
        if ($this->internal🔀Router🔀Delete🔀Dependabot instanceof Internal\Router\Delete\Dependabot === false) {
            $this->internal🔀Router🔀Delete🔀Dependabot = new Internal\Router\Delete\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Dependabot;
    }

    public function internal🔀Router🔀Delete🔀Git(): Internal\Router\Delete\Git
    {
        if ($this->internal🔀Router🔀Delete🔀Git instanceof Internal\Router\Delete\Git === false) {
            $this->internal🔀Router🔀Delete🔀Git = new Internal\Router\Delete\Git(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Git;
    }

    public function internal🔀Router🔀Delete🔀Issues(): Internal\Router\Delete\Issues
    {
        if ($this->internal🔀Router🔀Delete🔀Issues instanceof Internal\Router\Delete\Issues === false) {
            $this->internal🔀Router🔀Delete🔀Issues = new Internal\Router\Delete\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Issues;
    }

    public function internal🔀Router🔀Delete🔀Pulls(): Internal\Router\Delete\Pulls
    {
        if ($this->internal🔀Router🔀Delete🔀Pulls instanceof Internal\Router\Delete\Pulls === false) {
            $this->internal🔀Router🔀Delete🔀Pulls = new Internal\Router\Delete\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Pulls;
    }

    public function internal🔀Router🔀Delete🔀Scim(): Internal\Router\Delete\Scim
    {
        if ($this->internal🔀Router🔀Delete🔀Scim instanceof Internal\Router\Delete\Scim === false) {
            $this->internal🔀Router🔀Delete🔀Scim = new Internal\Router\Delete\Scim(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Scim;
    }

    public function internal🔀Router🔀Delete🔀CodeSecurity(): Internal\Router\Delete\CodeSecurity
    {
        if ($this->internal🔀Router🔀Delete🔀CodeSecurity instanceof Internal\Router\Delete\CodeSecurity === false) {
            $this->internal🔀Router🔀Delete🔀CodeSecurity = new Internal\Router\Delete\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀CodeSecurity;
    }

    public function internal🔀Router🔀Delete🔀Copilot(): Internal\Router\Delete\Copilot
    {
        if ($this->internal🔀Router🔀Delete🔀Copilot instanceof Internal\Router\Delete\Copilot === false) {
            $this->internal🔀Router🔀Delete🔀Copilot = new Internal\Router\Delete\Copilot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Copilot;
    }

    public function internal🔀Router🔀Delete🔀Billing(): Internal\Router\Delete\Billing
    {
        if ($this->internal🔀Router🔀Delete🔀Billing instanceof Internal\Router\Delete\Billing === false) {
            $this->internal🔀Router🔀Delete🔀Billing = new Internal\Router\Delete\Billing(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Billing;
    }

    public function internal🔀Router🔀Delete🔀Reactions(): Internal\Router\Delete\Reactions
    {
        if ($this->internal🔀Router🔀Delete🔀Reactions instanceof Internal\Router\Delete\Reactions === false) {
            $this->internal🔀Router🔀Delete🔀Reactions = new Internal\Router\Delete\Reactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Delete🔀Reactions;
    }

    public function internal🔀Router🔀Put🔀Apps(): Internal\Router\Put\Apps
    {
        if ($this->internal🔀Router🔀Put🔀Apps instanceof Internal\Router\Put\Apps === false) {
            $this->internal🔀Router🔀Put🔀Apps = new Internal\Router\Put\Apps(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Apps;
    }

    public function internal🔀Router🔀Put🔀EnterpriseAdmin(): Internal\Router\Put\EnterpriseAdmin
    {
        if ($this->internal🔀Router🔀Put🔀EnterpriseAdmin instanceof Internal\Router\Put\EnterpriseAdmin === false) {
            $this->internal🔀Router🔀Put🔀EnterpriseAdmin = new Internal\Router\Put\EnterpriseAdmin(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀EnterpriseAdmin;
    }

    public function internal🔀Router🔀Put🔀Repos(): Internal\Router\Put\Repos
    {
        if ($this->internal🔀Router🔀Put🔀Repos instanceof Internal\Router\Put\Repos === false) {
            $this->internal🔀Router🔀Put🔀Repos = new Internal\Router\Put\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Repos;
    }

    public function internal🔀Router🔀Put🔀Activity(): Internal\Router\Put\Activity
    {
        if ($this->internal🔀Router🔀Put🔀Activity instanceof Internal\Router\Put\Activity === false) {
            $this->internal🔀Router🔀Put🔀Activity = new Internal\Router\Put\Activity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Activity;
    }

    public function internal🔀Router🔀Put🔀Actions(): Internal\Router\Put\Actions
    {
        if ($this->internal🔀Router🔀Put🔀Actions instanceof Internal\Router\Put\Actions === false) {
            $this->internal🔀Router🔀Put🔀Actions = new Internal\Router\Put\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Actions;
    }

    public function internal🔀Router🔀Put🔀Orgs(): Internal\Router\Put\Orgs
    {
        if ($this->internal🔀Router🔀Put🔀Orgs instanceof Internal\Router\Put\Orgs === false) {
            $this->internal🔀Router🔀Put🔀Orgs = new Internal\Router\Put\Orgs(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Orgs;
    }

    public function internal🔀Router🔀Put🔀Codespaces(): Internal\Router\Put\Codespaces
    {
        if ($this->internal🔀Router🔀Put🔀Codespaces instanceof Internal\Router\Put\Codespaces === false) {
            $this->internal🔀Router🔀Put🔀Codespaces = new Internal\Router\Put\Codespaces(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Codespaces;
    }

    public function internal🔀Router🔀Put🔀Projects(): Internal\Router\Put\Projects
    {
        if ($this->internal🔀Router🔀Put🔀Projects instanceof Internal\Router\Put\Projects === false) {
            $this->internal🔀Router🔀Put🔀Projects = new Internal\Router\Put\Projects(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Projects;
    }

    public function internal🔀Router🔀Put🔀Migrations(): Internal\Router\Put\Migrations
    {
        if ($this->internal🔀Router🔀Put🔀Migrations instanceof Internal\Router\Put\Migrations === false) {
            $this->internal🔀Router🔀Put🔀Migrations = new Internal\Router\Put\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Migrations;
    }

    public function internal🔀Router🔀Put🔀Interactions(): Internal\Router\Put\Interactions
    {
        if ($this->internal🔀Router🔀Put🔀Interactions instanceof Internal\Router\Put\Interactions === false) {
            $this->internal🔀Router🔀Put🔀Interactions = new Internal\Router\Put\Interactions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Interactions;
    }

    public function internal🔀Router🔀Put🔀Teams(): Internal\Router\Put\Teams
    {
        if ($this->internal🔀Router🔀Put🔀Teams instanceof Internal\Router\Put\Teams === false) {
            $this->internal🔀Router🔀Put🔀Teams = new Internal\Router\Put\Teams(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Teams;
    }

    public function internal🔀Router🔀Put🔀Oidc(): Internal\Router\Put\Oidc
    {
        if ($this->internal🔀Router🔀Put🔀Oidc instanceof Internal\Router\Put\Oidc === false) {
            $this->internal🔀Router🔀Put🔀Oidc = new Internal\Router\Put\Oidc(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Oidc;
    }

    public function internal🔀Router🔀Put🔀CodeSecurity(): Internal\Router\Put\CodeSecurity
    {
        if ($this->internal🔀Router🔀Put🔀CodeSecurity instanceof Internal\Router\Put\CodeSecurity === false) {
            $this->internal🔀Router🔀Put🔀CodeSecurity = new Internal\Router\Put\CodeSecurity(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀CodeSecurity;
    }

    public function internal🔀Router🔀Put🔀Dependabot(): Internal\Router\Put\Dependabot
    {
        if ($this->internal🔀Router🔀Put🔀Dependabot instanceof Internal\Router\Put\Dependabot === false) {
            $this->internal🔀Router🔀Put🔀Dependabot = new Internal\Router\Put\Dependabot(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Dependabot;
    }

    public function internal🔀Router🔀Put🔀Issues(): Internal\Router\Put\Issues
    {
        if ($this->internal🔀Router🔀Put🔀Issues instanceof Internal\Router\Put\Issues === false) {
            $this->internal🔀Router🔀Put🔀Issues = new Internal\Router\Put\Issues(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Issues;
    }

    public function internal🔀Router🔀Put🔀Pulls(): Internal\Router\Put\Pulls
    {
        if ($this->internal🔀Router🔀Put🔀Pulls instanceof Internal\Router\Put\Pulls === false) {
            $this->internal🔀Router🔀Put🔀Pulls = new Internal\Router\Put\Pulls(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Pulls;
    }

    public function internal🔀Router🔀Put🔀Scim(): Internal\Router\Put\Scim
    {
        if ($this->internal🔀Router🔀Put🔀Scim instanceof Internal\Router\Put\Scim === false) {
            $this->internal🔀Router🔀Put🔀Scim = new Internal\Router\Put\Scim(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Scim;
    }

    public function internal🔀Router🔀Put🔀Gists(): Internal\Router\Put\Gists
    {
        if ($this->internal🔀Router🔀Put🔀Gists instanceof Internal\Router\Put\Gists === false) {
            $this->internal🔀Router🔀Put🔀Gists = new Internal\Router\Put\Gists(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Gists;
    }

    public function internal🔀Router🔀Put🔀Users(): Internal\Router\Put\Users
    {
        if ($this->internal🔀Router🔀Put🔀Users instanceof Internal\Router\Put\Users === false) {
            $this->internal🔀Router🔀Put🔀Users = new Internal\Router\Put\Users(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Put🔀Users;
    }

    public function internal🔀Router🔀Stream🔀Migrations(): Internal\Router\Stream\Migrations
    {
        if ($this->internal🔀Router🔀Stream🔀Migrations instanceof Internal\Router\Stream\Migrations === false) {
            $this->internal🔀Router🔀Stream🔀Migrations = new Internal\Router\Stream\Migrations(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Stream🔀Migrations;
    }

    public function internal🔀Router🔀Stream🔀Repos(): Internal\Router\Stream\Repos
    {
        if ($this->internal🔀Router🔀Stream🔀Repos instanceof Internal\Router\Stream\Repos === false) {
            $this->internal🔀Router🔀Stream🔀Repos = new Internal\Router\Stream\Repos(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Stream🔀Repos;
    }

    public function internal🔀Router🔀Stream🔀Actions(): Internal\Router\Stream\Actions
    {
        if ($this->internal🔀Router🔀Stream🔀Actions instanceof Internal\Router\Stream\Actions === false) {
            $this->internal🔀Router🔀Stream🔀Actions = new Internal\Router\Stream\Actions(browser: $this->browser, authentication: $this->authentication, requestSchemaValidator: $this->requestSchemaValidator, responseSchemaValidator: $this->responseSchemaValidator, hydrators: $this->hydrators);
        }

        return $this->internal🔀Router🔀Stream🔀Actions;
    }
}
